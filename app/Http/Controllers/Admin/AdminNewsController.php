<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\RequestHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Image;

class AdminNewsController extends Controller
{
    private $helper;

    public function __construct(RequestHelper $helper)
    {
        $this->helper = $helper;
    }

    // Helper functions
    public function validations()
    {
        return [
            'title' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'required|image',
            'body' => 'required',

        ];
    }

    //
    public function create()
    {
        if (auth()->guest()) {
            // redirect('/home');
            abort(403);
        }

        return view('admin.news.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->only([
            'title',
            'category_id',
            'body',
            'thumbnail',
        ]);
        // dd($attributes);

        $validate = Validator::make($attributes, $this->validations());
        if ($validate->fails()) {
            return $this->helper->failResponse($validate->errors()->first());
        }
        // $image =request()->file('thumbnail')->store('news', 'public');
        $image = request()->file('thumbnail');
        $filename = Str::random(12).$image->getClientOriginalName();
        $path = 'storage/news/'.$filename;
        Image::make($image->getRealPath())->resize(1100, 600)->save(public_path($path));

        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = Str::slug($attributes['title']);
        $attributes['thumbnail'] = $path;

        News::create($attributes);

        return redirect('admin/news')->with('success', 'Post created');
    }

    public function index()
    {
        return view('admin.news.index', [
            'news' => News::latest()->where('user_id', auth()->user()->id)->paginate(15),
        ]);
    }

    public function edit(News $single_news)
    {
        return view('admin.news.edit', [
            'single_news' => $single_news,
        ]);
    }

    public function update(News $single_news)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'body' => 'required',
        ]);
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $attributes['slug'] = Str::slug($attributes['title']);

        $single_news->update($attributes);

        return redirect('/admin/news');
    }

    public function destroy(News $single_news)
    {
        $single_news->delete();

        return back();
    }
}

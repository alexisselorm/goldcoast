<?php

namespace App\Http\Controllers\Admin;

use cloudinary;
use App\Models\News;
use Illuminate\Support\Str;
use App\Helpers\RequestHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

        return view('admin.news.create');
    }

    public function store()
    {
        $attributes = request()->only([
            'title',
            'body',
            'thumbnail',
        ]);
        // dd($attributes);

        $validate = Validator::make($attributes, $this->validations());
        if ($validate->fails()) {
            return $this->helper->failResponse($validate->errors()->first());
        }
        $image =request()->file('thumbnail')->store('news', 'public');
        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = Str::slug($attributes['title']);
        $attributes['thumbnail'] = Storage::disk('public')->url($image);
        // dd($attributes);

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

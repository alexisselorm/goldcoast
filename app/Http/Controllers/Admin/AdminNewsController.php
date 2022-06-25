<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminNewsController extends Controller
{
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

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('news', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = Str::slug($attributes['title']);
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        News::create($attributes);
        return redirect('authors/' . auth()->user()->username)->with('success', 'Post created');
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
            'slug' => ['required', Rule::unique('news', 'slug')->ignore($single_news->id)],
            'excerpt' => 'required',
            'body' => 'required',
        ]);
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $attributes['slug'] = Str::slug($attributes['title']);

        $single_news->update($attributes);

        return back();
    }
    public function destroy(News $single_news)
    {
        $single_news->delete();

        return back();
    }

}

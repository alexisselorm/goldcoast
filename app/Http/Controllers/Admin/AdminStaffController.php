<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Staff;

class AdminStaffController extends Controller
{
    //
    public function index(){
        return view('admin.staff.index');
    }
    public function create()
    {
        if (auth()->guest()) {
            redirect('/home');
        }
        return view('admin.staff.create');
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

        Staff::create($attributes);
        return redirect('authors/' . auth()->user()->username)->with('success', 'Post created');
    }

    public function edit(Staff $single_staff)
    {

        return view('admin.Staff.edit', [
            'single_staff' => $single_staff,
        ]);

    }
    public function update(Staff $single_staff)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('staff', 'slug')->ignore($single_staff->id)],
            'excerpt' => 'required',
            'body' => 'required',
        ]);
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $attributes['slug'] = Str::slug($attributes['title']);

        $single_staff->update($attributes);

        return back();
    }
    public function destroy(Staff $single_staff)
    {
        $single_staff->delete();

        return back();
    }
}

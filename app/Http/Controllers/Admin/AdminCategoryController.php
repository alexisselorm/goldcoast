<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\RequestHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    private $helper;

    public function __construct(RequestHelper $helper)
    {
        $this->helper = $helper;
    }

    // Helper Functions
    public function validations()
    {
        return [
            'name' => 'required',

        ];
    }

    //
    public function index()
    {
        return view('admin.category.index', [
            'categories' => Category::all(),
        ]);
    }

    public function create()
    {
        if (auth()->guest()) {
            redirect('/home');
        }

        return view('admin.category.create');
    }

    public function store()
    {
        $attributes = request()->only([
            'name',
        ]);
        $validate = Validator::make($attributes, $this->validations());
        if ($validate->fails()) {
            return $this->helper->failResponse($validate->errors()->first());
        }

        $attributes['slug'] = Str::slug($attributes['name']);
        Category::create($attributes);

        return redirect('admin/category')->with('success', 'category added');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category,
        ]);
    }

    public function update(Category $category)
    {
        $attributes = request()->validate([
            'name' => 'required']);

        $attributes['slug'] = Str::slug($attributes['name']);

        $category->update($attributes);

        return redirect('admin/category')->with('success', 'category edited');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back();
    }
}

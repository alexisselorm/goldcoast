<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\RequestHelper;
use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminPositionController extends Controller
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
        return view('admin.position.index', [
            'positions' => Position::all(),
        ]);
    }

    public function create()
    {
        if (auth()->guest()) {
            redirect('/home');
        }

        return view('admin.position.create');
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

        Position::create($attributes);

        return redirect('admin/position')->with('success', 'Position added');
    }

    public function edit(Position $position)
    {
        return view('admin.position.edit', [
            'position' => $position,
        ]);
    }

    public function update(Position $position)
    {
        $attributes = request()->validate([
            'name' => 'required', ]);

        $attributes['slug'] = Str::slug($attributes['name']);

        $position->update($attributes);

        return redirect('admin/position')->with('success', 'Position edited');
    }

    public function destroy(Position $position)
    {
        $position->delete();

        return back();
    }
}

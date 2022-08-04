<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\RequestHelper;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminStaffController extends Controller
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
            'fname' => 'required',
            'lname' => 'required',
            'picture' => 'required|image',
            'weight' => 'required',
            'height' => 'required',
            'country' => 'required',
            'player_number' => 'required',
            'position_id' => 'required',
            'joining_date' => 'required',
            'dob' => 'required',
        ];
    }

    //
    public function index()
    {
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
        $attributes = request()->only([
            'fname',
            'lname',
            'picture',
            'country',
            'position_id',
            'joining_date',
            'dob',
        ]);
        $validate = Validator::make($attributes, $this->validations());
        if ($validate->fails()) {
            return $this->helper->failResponse($validate->errors()->first());
        }

        // dd($attributes);
        $image = request()->file('picture')->store('players', 'public');

        $attributes['slug'] = Str::slug($attributes['fname'].' '.$attributes['lname']);
        $attributes['picture'] = Storage::disk('public')->url($image);

        Staff::create($attributes);

        return redirect('admin/players')->with('success', 'Player added');
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

<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\RequestHelper;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Position;
use App\Models\Staff;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
            'country_id' => 'required',
            'position_id' => 'required',
            'dob' => 'required',
        ];
    }

    //
    public function index()
    {
        return view('admin.staff.index', [
            'positions' => Position::where('id', '>', 4)->with(['players'])->get(),
        ]);
    }

    public function create()
    {
        if (auth()->guest()) {
            redirect('/home');
        }

        return view('admin.staff.create', [
            'positions' => Position::where('id', '>', 4)->with(['players'])->get(),
            'countries' => Country::all(),

        ]);
    }

    public function store()
    {
        $attributes = request()->only([
            'fname',
            'lname',
            'picture',
            'country_id',
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

        $attributes['slug'] = Str::slug($attributes['fname'] . ' ' . $attributes['lname']);
        $attributes['picture'] = Storage::disk('public')->url($image);

        Staff::create($attributes);

        return redirect('admin/staff')->with('success', 'Staff added');
    }

    public function edit(Staff $single_staff)
    {
        return view('admin.staff.edit', [
            'staff' => $single_staff,
            'positions' => Position::where('id', '>', 4)->with(['staff'])->get(),
            'countries' => Country::all(),

        ]);
    }

    public function update(Staff $single_staff)
    {
        // $attributes = request()->validate([
        //     'title' => 'required',
        //     'picture' => 'image',
        //     'slug' => ['required', Rule::unique('staff', 'slug')->ignore($single_staff->id)],
        //     'excerpt' => 'required',
        //     'body' => 'required',
        // ]);

        $attributes = request()->only([
            'fname',
            'lname',
            'picture',
            'country_id',
            'position_id',
            'joining_date',
            'dob',
        ]);
        if (isset($attributes['picture'])) {
            $attributes['picture'] = request()->file('picture')->store('pictures');
        }

        $attributes['slug'] = Str::slug($attributes['fname'] . ' ' . $attributes['lname']);

        $single_staff->update($attributes);

        return redirect('admin/staff')->with('success', 'Staff added');

    }

    public function destroy(Staff $single_staff)
    {
        $single_staff->delete();

        return back();
    }

}

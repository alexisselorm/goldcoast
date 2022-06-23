<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Staff;

class StaffController extends Controller
{
    //

    public function all()
    {
//  Used in laravel
        return view('staff',
            ['positions' => Position::with(['staff'])->get(),
            ]
        );

// Sent as a json object(API)
        // $positions = Position::with(['staff'])->get();
        // return response()->json($positions, 200);

    }

    public function show(Staff $single_staff)
    {
        return view('single_staff', [
            'single_staff' => $single_staff,
        ]);
    }
}

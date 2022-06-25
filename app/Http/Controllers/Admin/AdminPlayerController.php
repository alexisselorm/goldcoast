<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminPlayerController extends Controller
{
    //
    public function index()
    {
        return view('admin.players.index');
    }
}

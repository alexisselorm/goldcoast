<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function index(){

        return view('fixtures.index',[
        'latest_fixture' => Fixture::with('competition')->latest()->first(),
        'fixtures'=> Fixture::with('competition')->orderBy('id','desc')->get()
    ]);
    }
}

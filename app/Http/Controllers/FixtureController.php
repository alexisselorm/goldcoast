<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function index(){

        $date = Carbon::now();
        $game = Fixture::with('competition')->orderBy('gametime','asc')->first();


        return view('fixtures.index',[
        'latest_fixture' => Fixture::with('competition')->orderBy('gametime','asc')->first(),
        'fixturesByMonth'=> Fixture::with('competition')->orderBy('gametime','asc')->get()->groupBy(function($fixt){
            return Carbon::parse($fixt->gametime)->format('M');
        })
    ]);
    }
}

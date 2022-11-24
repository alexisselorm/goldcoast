<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function index(){

        $currentdate = Carbon::now();
        $game = Fixture::with('competition')->orderBy('gametime','asc')->first();


        return view('fixtures.index',[
        'latest_fixture' => Fixture::with('competition')->orderBy('gametime','desc')->first(),
        'fixturesByMonth'=> Fixture::with('competition')->orderBy('gametime','desc')->get()->groupBy(function($fixt) use($currentdate){
            // dd(Carbon::parse($fixt->gametime));
            // Only show fixtures from the current month to the months ahead
            if(Carbon::parse($fixt->gametime) >= $currentdate){
                return Carbon::parse($fixt->gametime)->format('M');
            }
            else{
                // continue;

            }
        })
    ]);
    }
}

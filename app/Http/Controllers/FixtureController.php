<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Carbon\Carbon;

class FixtureController extends Controller
{
    public function index(){

        $currentdate = date(now());
        $game = Fixture::with('competition')->orderBy('gametime','asc')->first();
        // dd(Carbon::parse($game->gametime)->format('M'));
        // dd(Carbon::parse(now())->format('M'));
        // dd(Carbon::parse($game->gametime)->format('M') > Carbon::parse(now())->format('M'));

        return view('fixtures.index',[
        'latest_fixture' => Fixture::with('competition')->orderBy('gametime','desc')->first(),
        'fixturesByMonth'=> Fixture::with('competition')->orderBy('gametime','desc')->get()->groupBy(function($fixt) {
            // Only show fixtures from the current month to the months ahead
            $months =Carbon::parse($fixt->gametime)->format('M');
            // dd($months);
            return $months;

        })
    ]);
    }
}

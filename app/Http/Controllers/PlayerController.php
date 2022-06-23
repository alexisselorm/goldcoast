<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Position;

class PlayerController extends Controller
{
//
//     public function all() {

//     return view('players',
//     ['players'=>Player::latest()->with('position')->get(),
//      'positions'=>Position::all()
//         ]
// );

public function all()
{
//  Used in laravel
    return view('players',
        ['positions' => Position::with(['players'])->get(),
        ]
    );

// Sent as a json object(API)
    // $positions = Position::with(['players'])->get();
    // return response()->json($positions, 200);

}

public function show(Player $player)
{
    return view('player', [
        'player' => $player,
    ]);

    // API Implementation

    // return response()->json([
    //     'player' => $player,
    // ]);
    // }
}
}

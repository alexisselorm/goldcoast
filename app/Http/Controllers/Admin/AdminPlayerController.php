<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\RequestHelper;
use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Position;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminPlayerController extends Controller
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
        return view('admin.players.index');
    }

    public function create()
    {
        if (auth()->guest()) {
            redirect('/home');
        }
        // dd(auth()->user());
        if (auth()->user()?->username !== 'Alexis') {
            abort(403);
        }

        return view('admin.players.create', [
            'positions' => Position::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->only([
            'fname',
            'lname',
            'picture',
            'weight',
            'height',
            'country',
            'player_number',
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

        Player::create($attributes);

        return redirect('admin/players')->with('success', 'Player added');
    }

    public function edit(Player $player)
    {
        return view('admin.Player.edit', [
            'player' => $player,
        ]);
    }

    public function update(Player $player)
    {
        $attributes = request()->only([
            'fname',
            'lname',
            'picture',
            'weight',
            'height',
            'country',
            'player_number',
            'position_id',
            'joining_date',
            'dob',
        ]);
        if (isset($attributes['picture'])) {
            $attributes['picture'] = $attributes['picture'] = Storage::disk('public')->url(request()->file('picture')->store('pictures', 'public'));
        }
        $attributes['slug'] = Str::slug($attributes['fname'] . ' ' . $attributes['lname']);

        $player->update($attributes);

        return back();
    }

    public function destroy(Player $player)
    {
        $player->delete();

        return back();
    }
}

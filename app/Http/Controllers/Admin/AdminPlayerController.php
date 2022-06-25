<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Player;

class AdminPlayerController extends Controller
{
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
        return view('admin.players.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('news', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['slug'] = Str::slug($attributes['title']);
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Player::create($attributes);
        return redirect('authors/' . auth()->user()->username)->with('success', 'Post created');
    }

    public function edit(Player $player)
    {

        return view('admin.Player.edit', [
            'player' => $player,
        ]);

    }
    public function update(Player $player)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('players', 'slug')->ignore($player->id)],
            'excerpt' => 'required',
            'body' => 'required',
        ]);
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $attributes['slug'] = Str::slug($attributes['title']);

        $player->update($attributes);

        return back();
    }
    public function destroy(Player $player)
    {
        $player->delete();

        return back();
    }
}

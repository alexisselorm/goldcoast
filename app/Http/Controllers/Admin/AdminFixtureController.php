<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\RequestHelper;
use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\Fixture;
use App\Models\Opponent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminFixtureController extends Controller
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
            'opponent_id' => 'required',
            'competition_id' => 'required',
            'gametime' => 'required',
            'isHome' => 'required',
        ];
    }

    public function index()
    {
        return view('admin.fixtures.index', [
            'fixtures' => Fixture::all(),
        ]);
    }

    public function create()
    {
        if (auth()->guest()) {
            redirect('/home');
        }

        return view('admin.fixtures.create', [
            'competitions' => Competition::all(),
            'opponents' => Opponent::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->only([
            'opponent_id',
            'gametime',
            'competition_id',
            'isHome',
        ]);
        $opponent = Opponent::find($attributes['opponent_id']);
        // dd($opponent);
        $validate = Validator::make($attributes, $this->validations());
        if ($validate->fails()) {
            return $this->helper->failResponse($validate->errors()->first());
        }

        $attributes['slug'] = Str::slug('goldcoastfc-vs-'.$opponent->name);
        Fixture::create($attributes);

        return redirect('admin/fixtures')->with('success', 'fixture added');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\RequestHelper;
use App\Http\Controllers\Controller;
use App\Models\Fixture;
use Illuminate\Http\Request;
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
            'home' => 'required',
            'away' => 'required',
            'competition' => 'required',
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

        return view('admin.fixtures.create');
    }

    public function store()
    {
        $attributes = request()->only([
            'home',
            'away',
            'gametime',
            'competition',
            'isHome',
        ]);
        $validate = Validator::make($attributes, $this->validations());
        if ($validate->fails()) {
            return $this->helper->failResponse($validate->errors()->first());
        }

        $attributes['slug'] = Str::slug($attributes['home']);
        Fixture::create($attributes);

        return redirect('admin/fixtures')->with('success', 'fixture added');
    }
}

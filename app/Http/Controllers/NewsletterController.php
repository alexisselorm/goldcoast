<?php

namespace App\Http\Controllers;

use App\Helpers\RequestHelper;
use App\Services\Newsletter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
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
            'email' => 'required',
        ];
    }

    public function __invoke(Newsletter $newsletter)
    {
        // dd($newsletter);
        $attributes = request()->only(['email']);
        $validate = Validator::make($attributes, $this->validations());
        if ($validate->fails()) {
            return $this->helper->failResponse($validate->errors()->first());
        }

        // try {
        $newsletter->subscribe(request('email'));
        // } catch (\Exception $e) {
        //     throw ValidationException::withMessages([
        //         'email' => 'This email could not be added to our newsletter list',
        //     ]);
        // }
        // dd($response);
        return redirect('/')->with('success', 'You are now signed up for our newsletter');
    }
}

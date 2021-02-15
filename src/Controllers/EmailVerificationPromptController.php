<?php

namespace Wulfheart\Burst\Controllers;

use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        throw new \Exception('tbd');
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(config('burst.home'))
                    : view('auth.verify-email');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\User;
use App\Http\Controllers\Controller;
use App\UseCases\Auth\RegisterService;


class RegisterController extends Controller
{

    private $service;

    public function __construct(RegisterService $service)
    {
        $this->middleware('guest');
        $this->service = $service;
    }


    //=====================================
    public function showRegistrationForm()
    {
        return view('auth.register');
    }


    //=====================================
    public function register(RegisterRequest $request)
    {
        $this->service->register($request);

        return redirect()->route('login')
            ->with('danger_alert', __('register.CheckYourEmail'));
    }


    //=====================================
    public function verify($token)
    {
        if (!$user = User::where('verify_token', $token)->first()) {
            return redirect()->route('login')
                ->with('error_alert', __('register.ErrorLinkVerify'));
        }

        try {
            $this->service->verify($user->id);
            return redirect()->route('login')->with('success_alert', __('register.EmailVerified'));
        } catch (\DomainException $e) {
            return redirect()->route('login')->with('error_alert', $e->getMessage());
        }
    }


}


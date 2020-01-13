<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin_LoginController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin-home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


     public function login(Request $request)
    {
        $this->validateLogin($request);
        

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }


        return $this->sendFailedLoginResponse($request);
    }



    public function Admin_showLoginForm()
    {
        return view('auth.admin_login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



     protected function guard()
    {
        return Auth::guard('admin');
    }
}

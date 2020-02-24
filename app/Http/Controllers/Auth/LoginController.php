<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class LoginController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


      public function showLoginForm()
    {
        return view('admin-frontend.admin-login');
    }


    public function login(Request $request)
    {
        $this->validateLogin($request);

        User::create($request->all());
        return redirect()->route('admin-frontend.admin-index')
                    ->with('success',' Successfully');

       

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        

        return $this->sendFailedLoginResponse($request);
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

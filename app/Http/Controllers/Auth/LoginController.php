<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        //$this->validateLogin($request);

        $request->validate([
            'email'=> 'required',
            'password'=>['required' , 'min:3' , 'max:15']  
        ]);


         $email = $request->input('email');
         $password = $request->input('password');

        //  $hashed = Hash::make($password);


            // its work also when remove '=' sign , and also use firstorfail()
         $user = User::where('email', '=', $email)->first();
         if (!$user) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
         }
         if (!Hash::check($password, $user->password)) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
         }
         // return response()->json(['success'=>true,'message'=>'success', 'data' => $user]);
        return redirect('admin')->with('success','Login Successfully');




      /*$chk  = $request->only('email', 'password');

        if (Auth::attempt($chk)) {
            // Authentication passed...
            return redirect('admin');
        } */



 

       /*User::create($request->all());
        $request->session()->put('email',$request->input('email'));
        $myemail=$request->session()->get('email');
        return redirect('login')
                    ->with('email',$myemail);

       

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }*/

        

      //  return $this->sendFailedLoginResponse($request);
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

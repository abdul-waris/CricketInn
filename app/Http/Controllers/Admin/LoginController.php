<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\postnews;


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
    protected $redirectTo = 'Admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['adminlogout']]);
    }
    
     /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */

    public function adminlogout()
    {
        Auth::guard('admin')->logout();
        //return redirect('Admin.login');
        return view('Admin.login');

    }
     //public function adminlogout()
     //{
         //Auth::guard('admin')->logout();
       //  return redirect('Admin.login');
     //return view('Admin.login');
        //}
    public function showLoginForm()
    {
        return view('Admin.login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            //return redirect('Admin/home');
            return redirect()->intended(route('Admin.home'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }
/**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
    
}

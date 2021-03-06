<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\VerifyRegistation;
use App\Models\Institution_info;


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

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  // login stystem

  public function showLoginForm()
  {
    return view('Frontend.auth.login');
  }
  public function login(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required',
    ]);
    // if(!is_null($user)){
    //   if($user->status == 1){
    // find user by this email
    $user = User::where('email', $request->email)->first();
    if (!is_null($user)) {
      //user login
      if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
       
        $institution = Institution_info::where('user_id', $user->id)->get();
        if (count($institution) > 0 ){
          return redirect()->route('noipunno');// to redirect add instutition 
        }else{
          return redirect()->route('addInstitution');// to redirect get Started Page
        }
       
      } else {
        session()->flash('NotRegistered', 'Your Email Address or Password is not correct!! Please Try Again With Correct Information !! Or Reset Password');
        return redirect()->route('login');
      }
    } else {
      session()->flash('NotRegistered', 'Your are Not Complete Registation; Please Registation First');
      return redirect()->route('register');
    }
  }

  public function user_logout()
  {
    Auth::guard('web')->logout();
    return redirect()->route('landing');
  }
}
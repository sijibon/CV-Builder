<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function login()
    {
       return view('frontend.pages.login');
    }


    public function login_action(Request $request)
    {
      $credentials = $request->only('email','password');


      if (Auth::guard('frontend_user')->attempt($credentials)) {

         return redirect()->intended(route('home'));
     }
       return redirect()->route('frontend_login');
    }


    public function logout()
    {
        Auth::guard('frontend_user')->logout();
        return redirect()->route('frontend_login');
    }

    //End
}

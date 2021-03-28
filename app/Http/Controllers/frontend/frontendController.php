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
          if (Auth::guard('frontend_user')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
                return redirect()->intended(route('home'));
            }
       return redirect()->route('frontend_login');
    }


    public function user_logout()
    {
        Auth::guard('frontend_user')->logout();
        
        return redirect()->route('frontend_login');
    }

    //End
}

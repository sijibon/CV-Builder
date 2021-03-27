<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.frontend');
    }

    public function login_action()
    {
       $credentials = $request->only('email','password');

       if (Auth::attempt($credentials)) {
        return redirect()->intended(route('index'));

     }
     return redirect()->route('login');
  }

}
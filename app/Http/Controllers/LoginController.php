<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'logout']);
    }
    public function showLogin()
    {
      return view('login');
    }


    public function postLogin(Request $request)
    {
        if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password])) {


                return redirect()->intended(route('dashboard'));



        }

        return redirect()->back();

    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}

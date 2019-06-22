<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function myCaptcha()
    {
      return view('myCaptcha');
    }

    public function myCaptchapost(Request $request)
    {
      $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'captcha' => 'required|captcha'
      ],['captcha.captcha'=>'Invalid Captcha Code.']);
      dd('Succes Login!');
    }


    public function refreshcaptcha()
    {
      return response()->json(['captcha' => captcha_src()]);
    }
}

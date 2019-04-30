<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function usession(Request $request)
    {
      session(['name'=>'Aakash']);
      //   session()->forget('name');
      return session('name');

      return view('session');

      //create
      $request->session()->put(['lang'=>'en']);
      //Read
      echo "The selected language is: ".$request->session()->get('lang');
      return view('session');
      
      //Deleting a session variable
    }
}

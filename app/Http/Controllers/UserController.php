<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
  public function __construct()
  {
    $this->middleware('second');
  }
  public function showPath()
  {
    echo "Hello World";
  }
  public function Ip()
  {
    $this->middleware('IpAddress');
  }
  public function user_reservation(){
    return view('user.reservation');
  }

  public function user_activity(){
    return view('user.activity');
  }

  public function user_logout(){
    Auth::logout();
    return redirect('/');
  }

  public function user_account(){
      return view('user.account');
  }
}

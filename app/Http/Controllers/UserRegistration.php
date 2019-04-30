<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRegistration extends Controller
{
    public function postRegister(Request $request)
    {
        $fname=$request->input('fname');
        echo 'FirstName '.$fname.'<br>';
        
        $lname=$request->lname;
        echo 'LastName '.$lname.'<br>';
        
        $pass=$request->pass;
        echo 'Password '.$pass.'<br';
    }
}
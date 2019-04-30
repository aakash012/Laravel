<?php
namespace App\Http\Controllers;

class AdminController extends Controller{
    
    //Basic
    public function index()
    {
        echo "Hello I am from Admin Controller";
    }
    
    //passing parameter
    
    public function parameter($number)
    {
        echo "Hello I am from Admin Controller<br>";
        echo "Number passed is $number<br>";
    }
//Passing two parameters ,with second being optional
    
    public function multipleparameters($number,$second='')
    {
        echo "Hello I am from Admin Controller<br>";
        echo "Number passed is $number<br>"; 
        echo "Second Number passed is $second<br>";
    }
}

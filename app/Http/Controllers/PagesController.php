<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

use App\Carcategory;

class PagesController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth', ['only' => ['book']]);
    }
    public function welcome()
    {
    	return view('front.welcome');
    }

    public function services()
    {
    	return view('front.services');
    }

    public function hire()
    {
        $suvs = Car::orderBy('created_at', 'desc')->where('carcategory_id', '=', 1)->get();
        $sedans = Car::orderBy('created_at', 'desc')->where('carcategory_id', '=', 2)->get();
        $vans = Car::orderBy('created_at', 'desc')->where('carcategory_id', '=', 3)->get();
        $pickups = Car::orderBy('created_at', 'desc')->where('carcategory_id', '=', 4)->get();
        $trucks = Car::orderBy('created_at', 'desc')->where('carcategory_id', '=', 4)->get();        
    	return view('front.hire')
                ->withSedans($sedans)
                ->withVans($vans)
                ->withPickups($pickups)
                ->withSuvs($suvs)
                ->withTrucks($trucks);
    }

    public function contact()
    {
    	return view('front.contact');
    }

    public function terms()
    {
        return view('front.terms');
    }

    public function book($id)
    {
        $car = Car::find($id);
        return view('cars.book', compact('car'));
    }
}

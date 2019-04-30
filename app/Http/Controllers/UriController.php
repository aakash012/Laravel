<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UriController extends Controller
{
    public function index(Request $request)
    {
        $path=$request->path();
        echo "path method ".$path."<br>";
        
        $pattern=$request->is('f/*');
        echo "is method ".$pattern."<br>";
        
        $url=$request->url();
        echo 'url method '.$url;
    }
}
?>
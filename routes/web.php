<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/terms', 'PagesController@terms')->name('terms');

// Route::get('/', 'PagesController@welcome')->name('welcome');

// Route::get('/services', 'PagesController@services')->name('services');

// Route::get('/hire', 'PagesController@hire')->name('hire');

// Route::get('/contact', 'PagesController@contact')->name('contact');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('cars', 'CarsController');
// Route::post('cars', ['uses' => 'CarsController@index', 'as' => 'cars.index']);

// Route::get('cars/create', 'CarsController@create')->name('cars.create');

// Route::post('cars/{user_id}', ['uses' => 'CarsController@store', 'as' => 'cars.store']);

// Route::get('cars/{id}', ['uses' => 'CarsController@show', 'as' => 'cars.show']);

// Route::get('cars/{id}/edit', ['uses' => 'CarsController@edit', 'as' => 'cars.edit']);

// Route::put('cars/{id}', ['uses' => 'CarsController@update', 'as' => 'cars.update']);


// Route::delete('cars/{id}', ['uses' => 'CarsController@destroy', 'as' => 'cars.destroy']);

// Route::post('book/verify', ['uses' => 'CarsController@verify', 'as' => 'book.verify']);

// Route::get('book/{id}', ['uses' => 'PagesController@book', 'as' => 'cars.book']);

// Route::resource('carcategories', 'CarcategoryController', ['except' => ['create']]);

// Route::resource('tags', 'TagsController', ['except' => ['create']]);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('fu',function(){
             return 'Hello world';
});

Route::get('/admin','AdminController@index');

Route::get('/admin1/{number}','AdminController@parameter');

Route::get('/admin2/{number}',function($number1)
                                     {
                                           echo "Number passed is $number1";
                                       })->where(['number'=>"[0-9]+"]);

Route::get('/admin3/{number}/{second}','
    AdminController@multipleparameters');

Route::get('posts/{post}/comments/{comment}',function ($postid, $commentId){
    echo "Your post is $postid and your comment is $commentId";
});

Route::get('search/{search}',function($search){
    return $search;
})->where('search','.*');

//Redirect routes
Route::redirect('/f','/admin');

Route::view('/welcome','welcome');

Route::get('/welcome1',function(){
    $data=['Rahul','Rohan','Ankit','Saurabh','Akshit'];
    return view("test-data",compact('data'));
});
//
////Another Method
////return view ('test-data')->with([
////    'names'=>$data, 'addresses'=>$addresses,
////]);
//
////Another method called Dynamic data
////return view('test-data')->withNames($data);
//
////with method
//
//Route::get('/welcome3',function(){
//    $data=['Rahul','Rohan','Ankit','Saurabh','Akshit'];
//    return  view ("test-data")->with('data',$data)
//    ->with('addresses',$addresses);
//});
//
////Another method
//Route::get('/welcome4',function(){
//    $data=['Rahul','Rohan','Ankit','Saurabh','Akshit'];
//    $addresses=['Dehradun','Delhi','Jalandhar'];
//return view('test-data')->with([
//    'names'=>$data,
//    'addresses'=>$addresses,
//]);
//});
//Route::get('/test1',function(){
//    return view('test1');
//});
//Route::get('/test2',function(){
//    return view('test2');
//});
//
//Route::get('/register',function()
//           {
//               return view('register');
//           });
//Route::post('user/register',['uses'=>'UserRegistration@postregister']);

Route::get('/registration',function()
    {
        return view ('register');
    });
Route::post('/laravel/public/user/register',['uses'=>'UserRegistration@postRegister']);

Route::get('f/bar','UriController@index');

Route::get('/f1',function(){
    return 'Hello World';
});

Route::get('/r2',function(){
    return [1,2,3];
});

Route::get('hello',function(){
    return response('Hello World',200)
        ->header('Content-Type','plain');
});

Route::get('/cookie',function(){
    return response("Hello",200)
        ->header('Content-Type','plain');
});

Route::get('/cookie',function(){
    return response("Hello",200)
        ->header('Content-Type','text/html')
        ->cookie('name','abc',2);
});

Route::get('json',function(){
    return response()->json(['name'=>'Samir Rana','state'=>'Uttarakhand']);
});

//Using redirect helper method
Route::get('dashboard',function(){
    return redirect('home/dashboard');
});

Route::get('home/dashboard',function(){
    return "I am the dashboard";
});

//redirecting to named routes
Route::get('/test',['as'=>'testing',function(){
    return view('test2');
}]);

Route::get('redirect',function(){
    return redirect()->route('testing');
});

//Redirecting to Controller's actions
Route::get('rr','RedirectController@index');

Route::get('/redirectcontroller',function(){
    return redirect()->action('RedirectController@index');
});
//Controllers

//Middlewares-->test.php view-->home.php

Route::get('/home',function(){
    return view('home');
})->middleware('test');

//controller middleware( firstmiddleware,secondmiddleware, USerController)
Route::get('/usercontroller/path',['middleware'=>'first',
        'uses'=>'UserController@showPath']);

//Resource controller
Route::resource('re','ResourceController');

Route::get('/store',function(){
    return view('store');
});
Route::get('/update',function(){
  return view('update');
});
Route::get('/delete',function(){
  return view('delete');
});

Route::resource('photos','PhotoContoller')->only(['index','show']);

Route::get('/master',function(){
  return view('layout/master');
});

Route::get('/child',function(){
  return view('child');
});

Route::get('/homepage',function(){
  return view('home');
});

Route::get('about-us',['as'=>'about',function(){
  return view('About');
}]);

Route::get('portfolio',function(){
  return view('Portfolio');
})->name('portfolio');

Route::get('contact',function(){
  return view('Contact');
})->name('contact');

Route::get('child1',function(){
  return view('child1')
  ->with('data','<h1>Some test data</h1>');
});

Route::get('/loops',function(){
  $users=['Rahul','Rohan','Ankit','Saurabh','Akshit'];
  $records=['A','B','C'];
  return view('loops')->with('users',$users)
  ->with('num','0')
  ->with('records',$records);
});

Route::get('/homepageCA',function(){
  return view('homepageCA');
})->name('homepageCA');

Route::get('/homepageCA/home',function(){
  return view('homepageCA/home');
})->middleware('test');
// Route::get('/homepageCA/ip',['middleware'=>'IpAddress',
//         'uses'=>'UserController@Ip']);


Route::get('aboutCA',function(){
  return view('aboutCA');
})->name('aboutCA');

Route::get('contactCA',function(){
  return view('contactCA');
})->name('contactCA');

// Route::get('homepageCA/home',function(){
//   return "Your ip is correct";
// })->name('homepageCA');

Route::get('/student/create',function(){
  return view('/student/create');
});
Route::resource('/student','studentController');

//Localization
Route::get('/lang/{lang?}',function($lang=null){
  Lang::setlocale($lang);
  return view('lang');
});
//session
Route::get('session','SessionController@usession');

Route::get('session/create',function(){
  return view('session.create');
});

Route::post('projects',function(){
  //validate the project
  //save the project
  session()->flash('message','Your project has been created');
  return redirect('/welcomehome');
});

Route::get('welcomehome',function(){
  return view('session');
});

Route::resource('postnew','PostController');
//Sending Emails
Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendattachmentemail','MailController@attachment_email');

Route::get('/Form',function(){
  return view('Form');
});

Route::get('/openform',function(){
  return view('openform');
});

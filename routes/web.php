<?php

use App\Http\Controllers\Controller;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return "<h1>hello</h1>";
});

// Route::get('/slider/{id}', function($para){
//     return $para;
// });

// Route::get('/slider/create', function(){
//     return "<h1>this is slider-create</h1>";
// })->name('slider.create');

// Route::get('/slider/{username?}/{password?}', function($user=null, $pass=null){
//     return "<p>this is $user and pass $pass</p>";
// })->name('slider.username');

// Route::get('/about/{name}/{password}', function($para1, $para2){
//     return "<p>this is $para1 and this 2 is $para2";
// })->name('about');

// Route::get('/cache', function(){
//     return "this is cache";
// });

// Route::redirect('/cache', '/about', 302);

// Route::get('/slider', function(){
//     // $firstname = "akmal";
//     // $lastname = "nawabi";
//     // $data = ['akmal','nawbi','321'];

//     // return view('slider', ['firstname'=>$firstname, 'lastname'=>$lastname]);
//     // return view('/slider', compact('firstname', 'lastname'));
//     // return view('slider', compact('data'));

//     $data = "<script>alert('ok')</script>";
//     return view('/slider', compact('data'));
// });


// Route::get('/slider', function(){
//     $data = [];
//     return view('slider.index', compact('data'));
// });

// Route::get('/slider/create', function(){
//     return view('slider.create');
// });

// Route::resource('/slider', \App\Http\Controllers\sliderController::class)->
// parameters(['slider'=>'id']);

Route::get('/slider/index', [\App\Http\Controllers\sliderController::class, 'index'])
->name('slider.index');

Route::get('/slider/create', [\App\Http\Controllers\sliderController::class, 'create'])
->name('slider.create');

Route::post('/slider/store', [\App\Http\Controllers\sliderController::class, 'store'])
->name('slider.store');

Route::get('/slider/edit/{id}', [\App\Http\Controllers\sliderController::class, 'edit'])
->name('slider.edit');
<?php

use App\Http\Controllers\Layout;
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
<<<<<<< HEAD
//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/', [Layout::class, 'Home']);

Route::controller(Layout::class)->group(function(){
  Route::get('/layout/Home','Home');
  Route::get('/layout/index','index');
=======
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/admin', [Layout::class, 'index']);
Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', [Layout::class, 'index']);

Route::controller(Layout::class)->group(function () {
    Route::get('/Layout/home', 'home');
    Route::get('/Layout/index', 'index');
});

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/aboutUs', function () {
    return view('aboutUs', [
        "title" => "About Us",
    ]);
});


Route::get('/contactUs', function () {
    return view('contactUs', [
        "title" => "Contact Us",
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio', [
        "title" => "Portfolio",
    ]);
>>>>>>> main
=======
// Route::get('/', function () {
//  return view('welcome');
// });

Route::get('/',[Layout::class, 'index']);

Route::controller(Layout::class)->group(function(){
    Route::get('/layout/home', 'home');
    Route::get('/layout/index', 'home');
>>>>>>> Stashed changes
});
=======
Route::get('/',[Layout::class, 'home']);

Route::controller(Layout::class)->group(function(){
    Route::get('/Layout/home', 'home');
    Route::get('/Layout/index', 'index');
});
>>>>>>> Stashed changes

<?php

use App\Http\Controllers\Layout;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Layout::class, 'index']);


Route::controller(Layout::class)->group(function () {
    Route::get('/Layout/home', 'home');
    Route::get('/Layout/index', 'index');
});

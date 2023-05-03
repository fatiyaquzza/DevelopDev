<?php

use App\Http\Controllers\Layout;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
});

Route::get('/test', function () {
    return view('test', [
        "title" => "Test",
    ]);
});

Route::get('/dashboard', function () {
    return view('layout.main');
})->middleware(['auth', 'verified'])->name('layout.main');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require _DIR_ . '/auth.php';

Route::get('/admin', [layout::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

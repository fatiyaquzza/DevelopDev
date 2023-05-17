<?php

use App\Http\Controllers\Layout;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
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

// Route::redirect('/', '/student');
// Route::resource("/student", StudentController::class);


Route::controller(Layout::class)->group(function () {
    Route::get('/layout/Home', 'Home');
    Route::get('/student', 'layout');
    Route::redirect('/', '/student');
    Route::resource("/student", StudentController::class);
    
});

Route::get('/portfolio/{id}', [StudentController::class, 'isi']);

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

// Route::get('/isi', function () {
//     return view('isi', [
//         "title" => "Isi",
//     ]);
// });

Route::get('/portfolio', [StudentController::class, 'tampil'])->name('portfolio');


Route::get('/dashboard', function () {
    return view('layout.main');
})->middleware(['auth', 'verified'])->name('layout.main');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';

// Route::get('/admin', [layout::class, 'index'])->middleware('auth');

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);
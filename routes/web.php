<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\webController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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



// page routes for HomeController
Route::get('/', [webController::class, 'index'])->name('home.index');
Route::get('/sermons', [webController::class, 'sermons'])->name('home.sermons');
Route::get('/news', [webController::class, 'news'])->name('home.news');
Route::get('/events', [webController::class, 'events'])->name('home.events');
Route::get('/about', [webController::class, 'about'])->name('home.about');
Route::get('/contact', [webController::class, 'contact'])->name('home.contact');


// auth
Route::get('/login', [LoginController::class, 'index'])->name('login');



Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']); // Assuming you have a store method to handle registration

// Route::get('login', function () {
//     return view('auth.login');
// });


// Route::get('/', function () {
//     return view('welcome');
// });
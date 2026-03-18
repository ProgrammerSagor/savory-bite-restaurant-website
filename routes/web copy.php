<?php

use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu-page', [HomeController::class, 'menu'])->name('menu');
Route::get('/reservations', [HomeController::class, 'reservations'])->name('reservations');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog-details', [HomeController::class, 'blog_details'])->name('blog_details');
Route::get('/food-details', [HomeController::class, 'food_details'])->name('food_details');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/confirm-order', [HomeController::class, 'confirm_order'])->name('confirm_order');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/register', [HomeController::class, 'register'])->name('register');


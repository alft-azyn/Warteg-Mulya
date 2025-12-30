<?php
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminGuard;

// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

use App\Http\Controllers\OrderController;

Route::get('/cart', [OrderController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [OrderController::class, 'addToCart'])->name('add_to_cart');
Route::get('/remove-from-cart/{id}', [OrderController::class, 'removeFromCart'])->name('remove_from_cart');
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('/dapur', [OrderController::class, 'index'])->name('dapur');
Route::resource('menus', MenuController::class);
Route::delete('/dapur/{id}', [OrderController::class, 'destroyOrder'])->name('dapur.destroy');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware([AdminGuard::class])->group(function () {
    Route::get('/dapur', [OrderController::class, 'index'])->name('dapur');
    Route::delete('/dapur/{id}', [OrderController::class, 'destroyOrder'])->name('dapur.destroy');
    Route::resource('menus', MenuController::class);
});
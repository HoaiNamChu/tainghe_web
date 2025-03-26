<?php

use App\Http\Controllers\Admin\ProductController;
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

Route::get('/', [\App\Http\Controllers\Clients\HomeController::class, 'index'])->name('home.index');

Route::get('/gioi-thieu', function () {
    return view('clients/about');
})->name('about');

Route::get('/dich-vu-sua-chua', function () {
    return view('clients/repair_service');
})->name('repair_service');

Route::get('/huong-dan-mua-hang', function () {
    return view('clients/shopping_guide');
})->name('shopping_guide');

Route::get('/tin-tuc', function () {
    return view('clients/blog');
})->name('blog');

Route::get('/lien-he', function () {
    return view('clients/contact');
})->name('contact');

Route::get('/register',[\App\Http\Controllers\Clients\UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register',[\App\Http\Controllers\Clients\UserController::class, 'register'])->name('register');

Route::get('/login', [\App\Http\Controllers\Clients\UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\Clients\UserController::class, 'login'])->name('login');

Route::get('/logout', [\App\Http\Controllers\Clients\UserController::class, 'logout'])->name('logout');

Route::get('/gui-don-hang', [\App\Http\Controllers\Clients\OrderController::class, 'checkout'])->name('checkout');

Route::get('/san-pham', [\App\Http\Controllers\Clients\ShopController::class, 'index'])->name('shop.index');

Route::get('/chi-tiet-san-pham', function () {
    return view('clients/single_product');
})->name('product.show');

Route::post('/cart/add', [\App\Http\Controllers\Clients\CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/show', [\App\Http\Controllers\Clients\CartController::class, 'showCart'])->name('cart.show');
Route::get('/cart/getTotalItem', [\App\Http\Controllers\Clients\CartController::class, 'getTotalItem'])->name('cart.getTotalItem');
Route::post('/cart/removeItem', [\App\Http\Controllers\Clients\CartController::class, 'removeItem'])->name('cart.removeItem');
Route::post('/cart/updateCart', [\App\Http\Controllers\Clients\CartController::class, 'updateCart'])->name('cart.updateCart');

Route::post('/checkCoupon', [\App\Http\Controllers\Clients\OrderController::class, 'checkCoupon'])->name('checkCoupon');

Route::post('/payment', [\App\Http\Controllers\Clients\OrderController::class, 'payment'])->name('payment');

Route::get('/order/success/{id}', [\App\Http\Controllers\Clients\OrderController::class, 'orderSuccess'])->name('order.success');

Route::get('/order/failed', function () {
    return view('clients.failed');
})->name('order.failed');

Route::get('/payment/callback', [\App\Http\Controllers\Clients\OrderController::class, 'paymentCallback'])->name('payment.callback');


Route::prefix('/admin')
    ->as('admin.')
    ->group(function () {

        Route::get('/', function () {
            return view('admins.dashboard');
        })->name('dashboard');
        Route::resource('products', ProductController::class);
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryControler::class);
    });

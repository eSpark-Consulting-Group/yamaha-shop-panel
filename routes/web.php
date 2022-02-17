<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('language/{language}', function ($language) {
    Session()->put('locale', $language);

    return redirect()->back();
})->name('language');

Route::group(['middleware' => ['auth', 'verified', 'account.locked']], function () {


    Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
        Route::post('lock', [\App\Http\Controllers\AccountController::class, 'lock']);
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {

        Route::get('/', [\App\Http\Controllers\ProfileController::class, 'show'])->name('show');
        Route::get('/edit', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('edit');
    });


    Route::middleware('auth.role:' . \App\Models\Role::AGENT)->group(function () {

        Route::get('/', \App\Http\Controllers\HomeController::class)->name('index');

        Route::get('/product/{product:slug}', \App\Http\Controllers\ProductController::class)->name('product.show');

        Route::get('/cart', \App\Http\Controllers\CartController::class)->name('cart');
        Route::post('/cart', \App\Http\Controllers\CartController::class);

        Route::get('/checkout', \App\Http\Controllers\CheckoutController::class)->name('checkout');

        Route::get('/orders', [\App\Http\Controllers\OrdersController::class, 'index'])->name('orders.index');


        Route::get('/shop', \App\Http\Controllers\ShopController::class)->name('shop.index');
        Route::get('/notices', \App\Http\Controllers\NoticesController::class)->name('notices.index');


        Route::get('/contact-us', fn () => Inertia::render('ContactUs', ['title' => 'お問い合わせ']))->name('contact');

        Route::get('/faq', \App\Http\Controllers\FaqsController::class)->name('faq.index');


        Route::controller(\App\Http\Controllers\InqueriesController::class)->as('inqueries.')->group(function () {

            Route::get('/inqueries', 'index')->name('index');
        });


        Route::controller(\App\Http\Controllers\QuotationsController::class)->as('quotations.')->prefix('quotations')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::get('/{quotation}', 'show')->name('show');
        });
    });
});

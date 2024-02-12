<?php

use App\Livewire\{IndexPage, ProductDetail, OrderSummaryPage, CheckoutPage, Counter};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;



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

Route::get('/', IndexPage::class)->name('index');
Route::get('/product/{slug}', ProductDetail::class)->name('products.show');
Route::get('/order-summary/{order}', OrderSummaryPage::class)->name('order-summary.show');
Route::get('/checkout', CheckoutPage::class)->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');


Route::get('/counter', Counter::class)->name('counter');

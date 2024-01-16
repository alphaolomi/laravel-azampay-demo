<?php

use App\Livewire\{IndexPage,ProductDetail,OrderSummaryPage,CheckoutPage};
use Illuminate\Http\Request;
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

Route::get('/', IndexPage::class)->name('index');
Route::get('/product/{slug}', ProductDetail::class)->name('products.show');
Route::get('/order-summary/{order}', OrderSummaryPage::class)->name('order-summary.show');
Route::get('/checkout', CheckoutPage::class)->name('checkout');

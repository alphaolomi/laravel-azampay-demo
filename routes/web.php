<?php

use App\Http\Controllers\CheckoutController;
use App\Models\Product;
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

Route::get('/', function (Request $request) {
    $products = Product::query()
        ->orderBy('name')
        ->limit(8)
        ->get();
    return view('welcome', [
        'products' => $products
    ]);
});


Route::get('/products/{product}', function (Request $request, $product) {
    $product = Product::query()
        ->where('slug', $product)
        ->firstOrFail();
    return view('product', [
        'product' => $product
    ]);
})->name('products.show');


Route::get('/checkout', function (Request $request) {
    return view('checkout');
});

// checkout
// Route::get('/checkout', [CheckoutController::class, 'update'])->name('checkout.show');
// Route::post('/checkout', 'CheckoutController@update')->name('checkout.update');



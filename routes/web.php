<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');
Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');
Route::get('/consult', function () {
    return view('consult');
})->name('consult');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/bundle', function () {
    return view('bundle');
})->name('bundle');
Route::get('/bundle-gaming', function () {
    return view('bundle-gaming');
})->name('bundle-gaming');
Route::get('/bundle-office', function () {
    return view('bundle-office');
})->name('bundle-office');

Route::get('/build', function () {
    return view('build');
})->name('build');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/manage-order', function () {
    return view('manageOrder');
})->name('manageOrder');

Route::get('/product-bundle', function (Illuminate\Http\Request $request) {
    $image = $request->query('image');
    $name = $request->query('name');
    $price = $request->query('price');

    return view('productBundle', ['image' => $image, 'name' => $name, 'price' => $price]);
})->name('product.show');

Route::get('/cpu', function () {
    return view('cpu');
})->name('cpu');
Route::get('/motherboard', function () {
    return view('motherboard');
})->name('motherboard');
Route::get('/ram', function () {
    return view('ram');
})->name('ram');
Route::get('/storage', function () {
    return view('storage');
})->name('storage');
Route::get('/graphic-card', function () {
    return view('graphic-card');
})->name('graphic-card');
Route::get('/power-supply', function () {
    return view('power-supply');
})->name('power-supply');
Route::get('/cases', function () {
    return view('cases');
})->name('cases');

Route::get('/product-details', function (Illuminate\Http\Request $request) {
    $image = $request->query('image');
    $name = $request->query('name');
    $price = $request->query('price');

    return view('productInfo', ['image' => $image, 'name' => $name, 'price' => $price]);
})->name('productDetails.show');

Route::post("/cart/add",[CartController::class, 'add'])->name('cart.add');
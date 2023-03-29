<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/bundle', function () {
    return view('bundle');
})->name('bundle');
Route::get('/bundle-gaming', function () {
    return view('bundle-gaming');
})->name('bundle-gaming');

Route::get('/build', function () {
    return view('build');
})->name('build');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/manage-order', function () {
    return view('manageOrder');
})->name('manageOrder');

Route::get('/product', function (Illuminate\Http\Request $request) {
    $image = $request->query('image');
    $name = $request->query('name');
    $price = $request->query('price');

    return view('product', ['image' => $image, 'name' => $name, 'price' => $price]);
})->name('product.show');
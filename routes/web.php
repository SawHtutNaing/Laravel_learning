<?php

use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\VarDumper;

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
    return view('index', [
        'name' => 'saw htut',
        "data" =>
        ['name', 'info', 'add ']
    ]);
})->name('page.home');


Route::get('/about-us', function () {
    return view('about-us')->with('about', 'to study');
})->name('page.about');


Route::view('/contact-us', 'contact-us', ['phone' => '099999'])->name('page.contact');


Route::get('products', function () {
    $response = Http::get('https://fakestoreapi.com/products/');
    $data =  $response->collect();
    print_r($data->where('price', "<", 200)->all());
});

Route::get("min_ga_lar_bar", function () {
    return view("min_ga_lar_bar");
})->name("minGaLarBar");

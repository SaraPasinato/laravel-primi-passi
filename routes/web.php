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
    $flowers = [
        'name' => 'Fiori',
        'list' => ['Rose', 'Lily', 'Tulip', 'Orchid'],
        'links' => [
           [ 'title'=>'HOME', 'url'=>'home' ],
           [ 'title'=>'PRODOTTI', 'url'=>'prod' ],
           [ 'title'=>'INFO', 'url'=>'info' ],
        ],
    ];
   // dump($flowers);
    return view('home', $flowers);
})->name('home');

Route::get('/product', function () {

    return view('sub.product');
})->name('prod');

Route::get('/info', function () {

    return view('sub.info');
})->name('info');

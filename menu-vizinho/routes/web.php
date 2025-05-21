<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get(
    '/cardapio',
    function () {
        return view('menu');
    }
)->name('cardapio');

Route::get('/cardapio/produto', function () {
    return view('product');
})->name('produto');

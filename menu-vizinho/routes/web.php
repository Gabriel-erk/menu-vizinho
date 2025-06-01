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

Route::get('/ofertas', function() {
    return view('offer');
})->name('oferta');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/cadastro', function(){
    return view('register');
})->name('cadastro');

Route::get('/politicas-de-privacidade', function(){
    return view('privacy-policies');
})->name('politicas');

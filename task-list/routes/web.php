<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello';
})->name('hello');

Route::get('/oi', function () {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function ($name) {
    return 'hello ' . $name . '!';
});

Route::fallback(function () {
    return 'Still nothing here';
});

<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.cards');
});

Route::get('/card', function () {
    return view('pages.card');
});

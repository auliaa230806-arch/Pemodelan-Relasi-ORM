<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/praktikum.php';
Route::get('/', function () {
    return view('welcome');
});

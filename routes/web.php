<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('index');
});

Route::get('/fish', function () {
    return view('fish');
});

// Public menu API
Route::get('/api/menu', [MenuController::class, 'menu']);

Route::get('/links', function () {
    return view('linkTree');
});

Route::get('fish', function () {
    return view('fish');
});

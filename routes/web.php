<?php

use App\Http\Controllers\CustomFacadeGreetingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-custom-facades', [CustomFacadeGreetingController::class, 'show']);


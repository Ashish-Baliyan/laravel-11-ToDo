<?php

use App\Http\Controllers\CustomFacadeGreetingController;
use App\Http\Middleware\CustomMiddelwareName;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-custom-facades', [CustomFacadeGreetingController::class, 'show']);

Route::get('/test-custom-middelware', function () {
    return 'Test Custom Middelware';
})->middleware(CustomMiddelwareName::class);


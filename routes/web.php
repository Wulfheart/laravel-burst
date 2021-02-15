<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Wulfheart\Burst\Controllers\ShowLoginController;

Route::get('/login', ShowLoginController::class);

Route::post('/post');
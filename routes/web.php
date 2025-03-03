<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');



### User Routes
require __DIR__.'/user/settings.php';
require __DIR__.'/user/auth.php';
require __DIR__.'/user/user_web.php';


### Admin Routes
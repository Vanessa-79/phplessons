<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


//each route can have optionally name
Route::get('/', [WelcomeController::class, 'welcome'])->name('welcomee');



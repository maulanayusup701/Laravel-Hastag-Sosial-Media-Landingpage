<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\LandingPageController;

Route::get('/', [LandingPageController::class, 'index']);
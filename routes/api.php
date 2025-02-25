<?php

use App\Http\Controllers\Api\HomepageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/homepage', [HomepageController::class, 'index']);

<?php

use Thomas2022\Contact\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

Route::get("/", [ContactController::class, 'index']);

Route::post('/contact', [ContactController::class, 'send']);

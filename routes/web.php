<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->name('dashboard');

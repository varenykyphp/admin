<?php

use Illuminate\Support\Facades\Route;
use VarenykyAdmin\Http\Controllers\PageController;
use VarenykyAdmin\Http\Controllers\ThemeController;

Route::get('/css/theme.css', [ThemeController::class, 'css'])->name('css');

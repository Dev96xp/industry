<?php
use Illuminate\Support\Facades\Route;

Use App\Http\Controllers\Admin\HomeController;


Route::get('', [HomeController::class, 'index']);
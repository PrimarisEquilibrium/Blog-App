<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::inertia("/", "Home")->name("home");

Route::inertia("dashboard", "Dashboard")->name("dashboard");
Route::inertia("login", "Auth/Login")->name("login");
Route::inertia("register", "Auth/Register")->name("register");

Route::resource("blogs", BlogController::class);
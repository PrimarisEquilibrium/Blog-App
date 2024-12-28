<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::inertia("/", "Home")->name("home");

Route::inertia("dashboard", "Dashboard")
    ->name("dashboard")
    ->middleware("auth");

Route::inertia("register", "Auth/Register")->name("register");
Route::post("register", [AuthController::class, "register"]);

Route::inertia("login", "Auth/Login")->name("login");
Route::post("login", [AuthController::class, "login"]);

Route::post("logout", [AuthController::class, "logout"])
    ->name("logout")
    ->middleware("auth");

Route::resource("blogs", BlogController::class);
    // ->middleware("auth");

Route::get("/dev-login", function() {
    abort_unless(app()->environment("local"), 403);

    Auth::login(User::first());

    return redirect()->to("/");
})->name("dev-login");
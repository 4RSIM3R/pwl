<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return view("home");
});

Route::get("/profile", function () {
    return view("profile");
});

Route::get("/experience", function () {
    return view("experience");
});

Route::group(["prefix" => "product"], function () {
    Route::get("", [FirstController::class, "product"]);
});

Route::get("news/{id}", [FirstController::class, "news"]);

Route::group(["prefix" => "program"], function () {
    Route::get("", [FirstController::class, "program"]);
});

Route::get("about", [FirstController::class, "about"]);

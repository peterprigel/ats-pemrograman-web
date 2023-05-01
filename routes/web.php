<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//HomeController
Route::get("/",[HomeController::class,"index"]);
Route::get("/dashboard",[HomeController::class,"show"]);
Route::get("/contact",[HomeController::class,"contact"]);

//SessionController
Route::get("/login",[SessionController::class,"index"]);
Route::post("/login",[SessionController::class,"login"]);
Route::get("/signup",[SessionController::class,"signup"]);
Route::post("/signup",[SessionController::class,"create"]);
Route::get("/logout",[SessionController::class,"logout"]);
<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VilleController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware("auth")->group(function () {
    Route::get("/", [HomeController::class, "index"])->name("dashboard");
    Route::get("/villes", [VilleController::class, "create"])->name("ville.create");

});

require __DIR__ . '/auth.php';

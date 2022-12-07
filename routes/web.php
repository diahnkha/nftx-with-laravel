<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('slicing');
})->name("homepage");

Route::get('/customer', function () {
    return view('customer-coba');
})->name("customer");

Route::get('/pricing', function () {
    return view('pricing-coba');
})->name("pricing");

Route::get('/how', function () {
    return view('how-coba');
})->name("how");

Route::get('/robust', function () {
    return view('robust-coba');
})->name("robust");

Route::get('/testimonial', function () {
    return view('testimonial-coba');
})->name("testimonial");

Route::get('/planet', function () {
    return view('planet-coba');
})->name("planet");

Route::get('/analyse', function () {
    return view('analyse-coba');
})->name("analyse");

Route::prefix("user")->group(function(){
    Route::get("/list", [UserController::class, "index"])->name("user.list");
    Route::get("/detail/{id}", [UserController::class, "detail"])->name("user.detail");
    Route::get("/store", [UserController::class, "store"])->name("user.store");

    Route::post("/create", [UserController::class, "create"])->name("user.create");
    Route::put("/update/{id}", [UserController::class, "update"])->name("user.update");
    Route::get("/destroy/{id}", [UserController::class, "destroy"])->name("user.destroy");

});

Route::get("/landing", [LandingController::class, "landing"])
    ->prefix("v1")
    ->name("page");

// Route::prefix("user")->group(function(){
//     Route::get("landing", LandingController::class, "landing"])
//         ->name("page");
// });

// /user
// /user/create
// /user/edit
// /user/delete

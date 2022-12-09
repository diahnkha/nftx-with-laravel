<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SekolahController;

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

// Route::prefix("user")
//     ->name("user.")
//     ->controller(UserController::class)
//     ->group(function(){
//         Route::get("/list","index")->name("list");
//         Route::get("/detail/{id}","detail")->name("detail");
//         Route::get("/store","store")->name("store");

//         Route::post("/create","create")->name("create");
//         Route::put("/update/{id}","update")->name("update");
//         Route::get("/destroy/{id}","destroy")->name("destroy");
//     });

Route::prefix("sekolah")->group(function(){
    Route::get("/list", [SekolahController::class, "index"])->name("sekolah.list");
    Route::get("/detail/{id}", [SekolahController::class, "detail"])->name("sekolah.detail");
    Route::get("/store", [SekolahController::class, "store"])->name("sekolah.store");

    Route::post("/create", [SekolahController::class, "create"])->name("sekolah.create");
    Route::put("/update/{id}", [SekolahController::class, "update"])->name("sekolah.update");
    Route::get("/destroy/{id}", [SekolahController::class, "destroy"])->name("sekolah.destroy");
});

Route::get("/landing", [LandingController::class, "landing"])
    ->prefix("v1")
    ->name("page");

Route::any('/upload', [LandingController::class, "upload"])->name("upload");

// Route::prefix("user")->group(function(){
//     Route::get("landing", LandingController::class, "landing"])
//         ->name("page");
// });

// /user
// /user/create
// /user/edit
// /user/delete

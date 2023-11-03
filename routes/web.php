<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UserController;
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


// book
Route::get('/', [BookController::class, "index"]);
Route::get('/search-books', [BookController::class, "books"]);
Route::get("/book-details/{book:slug}", [BookController::class, "show"]);

Route::post("/books/{book:slug}/favourite", [FavouriteController::class, "handelFavourite"]);

// user
Route::get('/user-profile/{user:username}', [UserController::class, "getUser"]);
Route::get('/pricing-section', [UserController::class, "getPrice"]);

Route::get('/user/update-user', [UserController::class, "getUpdate"]);
Route::patch('/user/update-user/{user:username}', [UserController::class, "update"]);

// comment

Route::post("/books/{book:slug}/review", [ReviewController::class, 'store']);

// Auth Route - GET
Route::get("/login", [AuthController::class, "viewLogin"])->name("login");
Route::get("/register", [AuthController::class, "viewRegister"]);

// Auth Route - POST
Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);
Route::post("/logout", [AuthController::class, "logout"]);

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyBookController;
use App\Http\Controllers\ChapterController;
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

// buy book
Route::post("/books/{book:slug}/buy", [BuyBookController::class, "handelBuyBook"]);

//read book
Route::get("/book/chapter/{chapter:slug}/read", [ChapterController::class, "show"]);


// author 

// book
Route::get("/book/new-book", [BookController::class, "create"]);
Route::get("/book/{book:id}/book-update", [BookController::class, "edit"]);

Route::patch("/book/{book:id}/book-update", [BookController::class, "update"]);

//create book
Route::post("/book/new-book", [BookController::class, "insert"]);

//delete book
Route::delete("/book/{book:id}/book-delete", [BookController::class, "destory"]);

// dashboard
Route::get("/author/dashboard", [AuthorController::class, "index"]);

/////////////////////////////////////////////////////////////////////

// user
Route::get('/user-profile/{user:username}', [UserController::class, "getUser"]);
Route::get('/pricing-section', [UserController::class, "getPrice"]);

Route::get('/user/update-user', [UserController::class, "getUpdate"]);
Route::patch('/user/update-user/{user:username}', [UserController::class, "update"]);
Route::get('/user/{user:username}/purchased', [UserController::class, "purchased"]);

// comment
Route::post("/books/{book:slug}/review", [ReviewController::class, 'store']);

// Auth Route - GET
Route::get("/login", [AuthController::class, "viewLogin"])->name("login");
Route::get("/register", [AuthController::class, "viewRegister"]);

// Auth Route - POST
Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);
Route::post("/logout", [AuthController::class, "logout"]);



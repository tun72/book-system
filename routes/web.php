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


// book
Route::get('/', [BookController::class, "index"]);
Route::get('/search-books', [BookController::class, "books"]);
Route::get("/book-details/{book:slug}", [BookController::class, "show"]);
Route::post("/books/{book:slug}/favourite", [FavouriteController::class, "handelFavourite"]);

// buy book
Route::post("/books/{book:slug}/buy", [BuyBookController::class, "handelBuyBook"]);

//read book
Route::get("/book/chapter/{chapter:slug}/read", [ChapterController::class, "show"]);

// book
Route::get("/book/new-book", [BookController::class, "create"]);
Route::get("/book/{book:id}/book-update", [BookController::class, "edit"]);

//delete book
Route::delete("/book/book-delete", [BookController::class, "destory"]);

////////////////////////////////////////////////////////////////////////////////////////



// author
Route::get("/author/dashboard", [AuthorController::class, "index"]);
Route::get("/author/creation", [AuthorController::class, "creation"]);

Route::patch("/book/{book:id}/book-update", [BookController::class, "update"]);
Route::post("/book/new-book", [BookController::class, "insert"]);

Route::get("/author/book/{book:id}/detail", [BookController::class, "detail"]);

Route::get("/author/book/{book:id}/new-chapter", [BookController::class, "newChapter"]);

// author register
Route::get("/author/register", [AuthorController::class, "register"]);
Route::post("/author/register", [AuthorController::class, "confirm"]);

/////////////////////////////////////////////////////////////////////////////////

// user
Route::get('/user-profile/{user:username}', [UserController::class, "getUser"]);
Route::get('/pricing-section', [UserController::class, "getPrice"]);

Route::get('/user/update-user', [UserController::class, "getUpdate"]);
Route::patch('/user/update-user/{user:username}', [UserController::class, "update"]);

Route::get('/user/{user:username}/purchased', [UserController::class, "purchased"]);
Route::get('/user/{user:username}/readlist', [UserController::class, "readlist"]);

Route::post("/user/{user:username}/buy-ggcoin", [UserController::class, "buycoin"]);

// comment
Route::post("/books/{book:slug}/review", [ReviewController::class, 'store']);

/////////////////////////////////////////////////////////////////////////////////////

// Auth Route - GET
Route::get("/login", [AuthController::class, "viewLogin"])->name("login");
Route::get("/register", [AuthController::class, "viewRegister"]);

// Auth Route - POST
Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);
Route::post("/logout", [AuthController::class, "logout"]);



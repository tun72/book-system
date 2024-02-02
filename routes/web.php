<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BuyBookController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ReadListController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SentFeedBackController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\UserController;
use App\Models\AuthorProfile;
use App\Models\ReadList;
use App\Models\SentFeedBack;
use Egulias\EmailValidator\Parser\Comment;
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
Route::get("/book/trends", [BookController::class, "trends"]);
Route::get("/book/populars", [BookController::class, "populars"]);
Route::get("/book/{book:id}/book-update", [BookController::class, "edit"]);

Route::get("/book/{book:id}/publish", [BookController::class, "publish"]);

//delete book
Route::delete("/book/book-delete", [BookController::class, "destory"]);

////////////////////////////////////////////////////////////////////////////////////////

// Chapter

Route::get("/author/chapter/{book:id}/create", [ChapterController::class, "create"]);
Route::post("/author/chapter/{book:id}/store", [ChapterController::class, "store"]);

Route::post("/author/chapter/{book:id}/new", [ChapterController::class, "new"]);

Route::get("/chapter/{chapter:slug}/edit", [ChapterController::class, "edit"]);
Route::patch("/chapter/{chapter:slug}/update", [ChapterController::class, "update"]);
Route::delete("/chapter/{chapter:slug}/delete", [ChapterController::class, "delete"]);


// readlist
Route::post("/readlist/{readlist:id}/delete", [ReadListController::class, "destory"]);

Route::post("/readlist/new", [ReadListController::class, "new"]);

Route::get("/readlist/{readlist:id}/show", [ReadListController::class, "show"]);

Route::delete("/readlist/book/{book:slug}/delete", [ReadListController::class, "removeBook"]);





// author


Route::get("/author/dashboard", [AuthorController::class, "index"]);
Route::get("/author/creation", [AuthorController::class, "creation"]);

Route::get("/author/{user:user_id}/comments", [AuthorController::class, "comments"]);

Route::get("/author/{author}/incomes", [AuthorController::class, "incomes"]);

Route::get("/author/{username}/profile", [AuthorProfileController::class, "index"]);
Route::get("/author/{username}/books", [AuthorProfileController::class, "books"]);
Route::get("/author/{username}/readlists", [AuthorProfileController::class, "index"]);

Route::patch("/book/{book:id}/book-update", [BookController::class, "update"]);
Route::post("/book/new-book", [BookController::class, "insert"]);

Route::get("/author/book/{book:id}/detail", [BookController::class, "detail"]);



// author register
Route::get("/author/register", [AuthorController::class, "register"]);
Route::post("/author/register", [AuthorController::class, "confirm"]);

/////////////////////////////////////////////////////////////////////////////////

// user
Route::get('/user-profile/{user:username}', [UserController::class, "getUser"]);

Route::get('/user/update-user', [UserController::class, "getUpdate"]);
Route::patch('/user/update-user/{user:username}', [UserController::class, "update"]);

Route::get('/user/{user:username}/purchased', [UserController::class, "purchased"]);
Route::get('/user/{user:username}/readlist', [UserController::class, "readlist"]);

Route::get('/user/feedback', [SentFeedBackController::class, "index"]);
Route::post('/user/feedback', [SentFeedBackController::class, "insert"]);

Route::post("/user/{user:username}/buy-ggcoin", [UserController::class, "buycoin"]);


Route::post("/user/{author:user_id}/subscribe", [SubscribeController::class, "subscribe"]);


// review
Route::get("/books/{book:slug}/review", [ReviewController::class, 'index']);
Route::post("/books/{book:slug}/review", [ReviewController::class, 'store']);
Route::post("/reviews/{review}/comment", [ReviewController::class, "comment"]);
Route::post("/reviews/{review}/like", [ReviewController::class, "like"]);
Route::post("/reviews/{review}/unlike", [ReviewController::class, "unlike"]);


// comment
Route::post("/chapter/{chapter:id}/comment", [CommentsController::class, 'store']);

// /comment/{{ $comment->id }}/edit

Route::patch("/comments/{comment}/edit", [CommentsController::class, "update"]);


Route::delete("/comment/{comment:id}/delete", [CommentsController::class, "delete"]);

// coin buying
Route::get("/buy-coin", [PriceController::class, "coins"]);
Route::get('/pricing-section', [PriceController::class, "getPrice"]);
Route::post("/confirm-payment", [PriceController::class, "confirm"]);

Route::post('/pricing-section', [PriceController::class, "store"]);



/////////////////////////////////////////////////////////////////////////////////////

// Auth Route - GET
Route::get("/login", [AuthController::class, "viewLogin"])->name("login");
Route::get("/register", [AuthController::class, "viewRegister"]);

// Auth Route - POST
Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);
Route::post("/logout", [AuthController::class, "logout"]);



Route::get("/success", [SuccessController::class, "index"]);



// admin

Route::get("/admin", [AdminController::class, "index"]);
Route::get("/admin/all-users", [AdminController::class, "users"]);

Route::get("/admin/authors/request", [AdminController::class, "reqAuthor"]);

Route::patch("/admin/authors/success/{requser}", [AdminController::class, "successRegAuthor"]);
Route::patch("/admin/authors/deny/{requser}", [AdminController::class, "denyRegAuthor"]);


Route::get("/admin/users/coins/buy", [AdminController::class, "coinsBuy"]);

Route::post("/admin/users/coins/{transfer:id}/confirm", [AdminController::class, "coinsConfirm"]);

Route::delete("/admin/users/coins/{transfer:id}/delete", [AdminController::class, "coinsDelete"]);

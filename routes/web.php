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
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ReadListController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SellsController;
use App\Http\Controllers\SentFeedBackController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::middleware(["auth", "isVerify"])->group(function () {

    ////////////////////////////////////////// USER /////////////////////////////////////////////////////////
    #books
    Route::post("/books/{book:slug}/favourite", [FavouriteController::class, "handelFavourite"]);

    #archive
    Route::get("/user/archive", [UserController::class, "archive"]);
    Route::delete("/archive/{archive:id}/remove", [UserController::class, "deleteArchive"]);

    #buy book
    Route::post("/books/{book:slug}/buy", [BuyBookController::class, "handelBuyBook"]);

    #read book
    Route::get("/book/chapter/{chapter:slug}/read", [ChapterController::class, "show"]);
    Route::post("/book/{book:id}/archive", [BookController::class, "archive"]);

    #readlist
    Route::delete("/readlist/{readlist:id}/delete", [ReadListController::class, "destory"]);
    Route::patch("/readlist/{readlist:id}/edit", [ReadListController::class, "update"]);
    Route::post("/readlist/new", [ReadListController::class, "new"]);
    Route::post("/readlist/{readlist:id}/private", [ReadListController::class, "private"]);
    Route::get("/readlist/{readlist:id}/show", [ReadListController::class, "show"]);
    Route::delete("/readlist/book/{book:slug}/delete", [ReadListController::class, "removeBook"]);

    #author register
    Route::get("/author/register", [AuthorController::class, "register"]);
    Route::post("/author/register", [AuthorController::class, "confirm"]);

    #user 
    Route::get('/user-profile/{user:username}', [UserController::class, "getUser"]);
    Route::get('/user/notification', [UserController::class, "notification"]);
    Route::get('/user/library', [UserController::class, "library"]);
    Route::get('/user/update-user', [UserController::class, "getUpdate"]);
    Route::get('/user/{user:username}/purchased', [UserController::class, "purchased"])->name("purchased");
    Route::get('/user/{user:username}/readlist', [UserController::class, "readlist"])->name("readlist");
    Route::get("/user/following", [UserController::class, "following"]);
    Route::get("/user-public/{user:username}", [UserController::class, "showUser"]);
    Route::get("/user-public/{user:username}/following", [UserController::class, "showFollowing"]);
    Route::get("/user/history", [HistoryController::class, "index"]);


    #user buy coin
    Route::post("/user/{user:username}/buy-ggcoin", [UserController::class, "buycoin"]);

    #update user
    Route::patch('/user/update-user/{user:username}', [UserController::class, "update"]);
    Route::patch('/user/update-background/{user:username}', [UserController::class, "changeBackground"]);

    #feedback
    Route::get('/user/feedback', [SentFeedBackController::class, "index"]);
    Route::post('/user/feedback', [SentFeedBackController::class, "insert"]);

    #subscribe
    Route::post("/user/{author:user_id}/subscribe", [SubscribeController::class, "subscribe"]);

    #review
    Route::get("/books/{book:slug}/review", [ReviewController::class, 'index']);
    Route::post("/books/{book:slug}/review", [ReviewController::class, 'store']);
    Route::post("/reviews/{review}/comment", [ReviewController::class, "comment"]);
    Route::post("/reviews/{review}/like", [ReviewController::class, "like"]);
    Route::post("/reviews/{review}/unlike", [ReviewController::class, "unlike"]);


    #coin buying
    Route::post("/chapter/{chapter:id}/comment", [CommentsController::class, 'store']);
    Route::patch("/comments/{comment}/edit", [CommentsController::class, "update"]);
    Route::delete("/comment/{comment:id}/delete", [CommentsController::class, "delete"]);

    #coin buying
    Route::get("/buy-coin", [PriceController::class, "coins"]);
    Route::get('/pricing-section', [PriceController::class, "getPrice"]);
    Route::post("/confirm-payment", [PriceController::class, "confirm"]);
    Route::post('/pricing-section', [PriceController::class, "store"]);

    #invite mail
    Route::post("/user/{user:username}/invite-mail", [UserController::class, "invite"]);

    #report
    Route::post("/book/{book:slug}/report", [ReportController::class, "store"]);



    //////////////////////////////////////////////// AUTHOR //////////////////////////////////////////////////
    #book
    /* GET */
    Route::get("/book/new-book", [BookController::class, "create"])->middleware(["isAuthor", 'checkbook']);
    Route::get("/book/{book:id}/book-update", [BookController::class, "edit"])->middleware(["isAuthor"]);
    Route::get("/book/{book:id}/publish", [BookController::class, "publish"])->middleware(["isAuthor"]);
    Route::get("/author/book/{book:id}/detail", [BookController::class, "detail"])->middleware(["isAuthor"]);

    /* POST PATCH DELETE */
    Route::patch("/book/{book:id}/book-update", [BookController::class, "update"])->middleware(["isAuthor"]);
    Route::post("/book/new-book", [BookController::class, "insert"])->middleware(["isAuthor"]);
    Route::delete("/book/book-delete", [BookController::class, "destory"])->middleware(["isAuthor"]);

    #Chapter
    /* GET */
    Route::get("/author/chapter/{book:id}/create", [ChapterController::class, "create"])->middleware(["isAuthor"]);
    Route::get("/chapter/{chapter:slug}/edit", [ChapterController::class, "edit"])->middleware(["isAuthor"]);

    /* POST PATCH DELETE */
    Route::post("/author/chapter/{book:id}/store", [ChapterController::class, "store"])->middleware(["isAuthor"]);
    Route::post("/author/chapter/{book:id}/new", [ChapterController::class, "new"])->middleware(["isAuthor"]);
    Route::patch("/chapter/{chapter:slug}/update", [ChapterController::class, "update"])->middleware(["isAuthor"]);
    Route::delete("/chapter/{chapter:slug}/delete", [ChapterController::class, "delete"])->middleware(["isAuthor"]);

    #dashboard
    Route::get("/author/dashboard", [AuthorController::class, "index"])->middleware(["isAuthor"]);
    Route::get("/author/creation", [AuthorController::class, "creation"])->middleware(["isAuthor"]);

    Route::get("/author/{user:id}/comments", [AuthorController::class, "comments"])->middleware(["isAuthor"]);

    #income coin
    Route::get("/author/{author}/incomes", [AuthorController::class, "incomes"])->middleware(["isAuthor"]);
    Route::get("/author/incomes/sell", [SellsController::class, "index"])->middleware(["isAuthor"]);
    Route::post("/author/incomes/sell", [SellsController::class, "store"])->middleware(["isAuthor"]);

    #reader
    Route::get("/author/{username}/profile", [AuthorProfileController::class, "index"]);
    Route::get("/author/{username}/books", [AuthorProfileController::class, "books"]);
    Route::get("/author/{username}/readlists", [AuthorProfileController::class, "index"]);
    Route::get("/author/readers", [AuthorController::class, "reader"])->middleware(["isAuthor"]);

    #notifications
    Route::get("/author/notifications", [AuthorController::class, "notification"])->middleware(["isAuthor"]);

    #verify
    Route::post("/author/{user:username}/verify", [AuthorController::class, "verify"])->middleware(["isAuthor"]);

    
});



/////////////////////////////////////////////////////////// ADMIN ///////////////////////////////////////////////////////////////////

// admin
#dashboard
Route::middleware(["auth", "isAdmin"])->group(function () {
    Route::get("/dashboard", [AdminController::class, "index"]);

    #admins setting
    Route::get("/admin/admin-setting", [AdminController::class, "adminSetting"]);
    Route::patch("/admin/{admin:username}/admin-setting", [AdminController::class, "updateAdminSetting"]);


    #users
    Route::get("/admin/all-users", [AdminController::class, "users"]);
    Route::get("/admin/user/{user:username}", [AdminController::class, "user"]);
    Route::patch("/admin/edit-user/{user:username}", [AdminController::class, "updateUser"]);
    Route::delete("/admin/{user:username}/delete", [AdminController::class, "deleteUser"]);

    #user author
    Route::get("/admin/authors/request", [AdminController::class, "reqAuthor"]);
    Route::patch("/admin/authors/success/{requser}", [AdminController::class, "successRegAuthor"]);
    Route::patch("/admin/authors/deny/{requser}", [AdminController::class, "denyRegAuthor"]);

    #coin sell and sold
    #sell
    Route::get("/admin/users/coins/sell", [AdminController::class, "coinsSell"]);
    Route::post("/admin/users/sell/{sell:id}/confirm", [SellsController::class, "confirm"]);
    Route::delete("/admin/users/sell/{sell:id}/delete", [SellsController::class, "delete"]);
    #buy
    Route::get("/admin/users/coins/buy", [AdminController::class, "coinsBuy"]);
    Route::post("/admin/users/coins/{transfer:id}/confirm", [AdminController::class, "coinsConfirm"]);
    Route::delete("/admin/users/coins/{transfer:id}/delete", [AdminController::class, "coinsDelete"]);

    #genres edit
    Route::get("/admin/books/genres", [AdminController::class, "genres"]);
    Route::post("/admin/books/genres", [AdminController::class, "postGenres"]);
    Route::delete("/admin/genres/{genres:slug}/delete", [AdminController::class, "deleteGenres"]);
    Route::patch("/admin/genres/{genres:slug}/edit", [AdminController::class, "editGenres"]);

    #books
    Route::get("/admin/books", [AdminController::class, "books"]);
    Route::delete("/admin/book/{book:id}/delete", [AdminController::class, "deleteBook"]);
 
    #setting
    Route::get("/admin/setting", [AdminController::class, "setting"]);
    Route::patch("/admin/setting", [AdminController::class, "updateSetting"]);

    #report
    
    Route::get("/admin/books/reports", [ReportController::class, "index"]);

    #history
    Route::get("/");
});




// book
Route::get('/', [BookController::class, "index"])->name("home");
Route::get('/search-books', [BookController::class, "books"]);
Route::get("/book-details/{book:slug}", [BookController::class, "show"]);
Route::get("/book/trends", [BookController::class, "trends"]);
Route::get("/book/populars", [BookController::class, "populars"]);


// Auth Route - GET
Route::get("/login", [AuthController::class, "viewLogin"])->name("login");
Route::get("/register", [AuthController::class, "viewRegister"]);
Route::get("/complete-your-profile/{id}", [AuthController::class, "completeProfile"]);
Route::get("/confirm-email", [AuthController::class, "confirm"]);
Route::get("/success", [SuccessController::class, "index"]);

// Auth Route - POST
Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);
Route::post("/logout", [AuthController::class, "logout"]);
Route::post("/auth/user/first-complete", [AuthController::class, "firstComplete"]);
Route::post("/auth/user/second-complete", [AuthController::class, "secondComplete"]);
Route::post("/checkOTP", [AuthController::class, "checkOTP"]);

// welcome 
Route::get("/welcome", [BookController::class, "welcome"]);

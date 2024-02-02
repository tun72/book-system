<?php

use App\Http\Controllers\AddReadListController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReadListController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get("/book/search/{query}", [BookController::class, "searchBookApi"]);

Route::post("/readlist/add", [AddReadListController::class, "addReadList"]);

Route::post("/readlist/new", [ReadListController::class, "store"]);



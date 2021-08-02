<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\VoteController;
use App\Models\Movie;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/movies',MovieController::class);

Route::post('/upvote/{id}',[Movie::class,'upvote']);
Route::post('/downvote/{id}',[Movie::class,'downvote']);


Route::post('/upvote',[Movie::class,'getUpvote']);
Route::post('/downvote',[Movie::class,'getDownvote']);
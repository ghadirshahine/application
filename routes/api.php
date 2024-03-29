<?php

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
Route::post('register','API\AuthController@register');
Route::post('login','API\AuthController@login');
Route::middleware('auth:api')->post('logout','API\AuthController@logout');

Route::middleware('auth:api')->group( function () {
    Route::resource('posts','API\PostController');
    Route::resource('comments','API\CommentController');
    Route::resource('counselors','API\CounselorController');
    Route::resource('educators','API\EducatorController');
    Route::resource('likes','API\LikeController');
    //Route::resource('likes','API\LikeController@like');
    //Route::post('/save_comment/{id}',['API\CommentController','save_comment']);



});


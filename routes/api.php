<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Controllers\ArticleController;
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



/** PRIVATE ARTICLE APIs */
Route::post('articles', 'App\Http\Controllers\ArticleController@store')->middleware('auth');

Route::put('articles/{article}', 'App\Http\Controllers\ArticleController@update')->middleware('auth');

Route::delete('articles/{article}', 'App\Http\Controllers\ArticleController@delete')->middleware('auth');

Route::get('user', "App\Http\Controllers\Auth\LoginController@profile")->middleware('auth');

Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->middleware('auth');

/** ARTICLE ROUTES */
Route::get('articles', 'App\Http\Controllers\ArticleController@index');

Route::get('articles/{article}', 'App\Http\Controllers\ArticleController@show');

/** USER ROUTES */
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');


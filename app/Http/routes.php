<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//文章
Route::group(['prefix' => 'article'], function () {
    Route::get('article.json','Article\ArticleController@getArticles');
    Route::get('article/{id}.json','Article\ArticleController@getArticle');
});

Route::get('/', function () {
    return view('welcome');
});



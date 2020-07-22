<?php

Route::get('/', function () {
    return view('welcome');
});


Route::resource('videos', 'VideosController');

Route::resource('posts', 'PostsController');

Route::post('videos/{id}/comments', 'CommentsController@videoComment');

Route::post('posts/{id}/comments', 'CommentsController@postComment');

Route::get('/comments','CommentsController@index');

Route::get('/comments/{id}','CommentsController@show');

Route::delete('/comments/{id}','CommentsController@destroy');



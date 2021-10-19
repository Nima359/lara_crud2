<?php

use Nima\Crud\App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get ("/" , function () {
  return view ("Crud::welcome");
});


Route::get ("/app" , function () {
  return view ("Crud::app.app");
});

Route::get ("login" , "\Nima\Crud\App\Http\Controllers\LoginController@index");


Route::resource ("post" , PostController::class);


Route::get ("post" , "\Nima\Crud\App\Http\Controllers\PostController@index")->name ("post.index");

Route::get ("post/{post}" , "\Nima\Crud\App\Http\Controllers\PostController@show")->name ("post.show");

Route::get ("post/{post}/create" , "\Nima\Crud\App\Http\Controllers\PostController@create")->name ("post.create");

Route::get ("post/{post}/edit" , "\Nima\Crud\App\Http\Controllers\PostController@edit")->name ("post.edit");

Route::post ("post" , "\Nima\Crud\App\Http\Controllers\PostController@store")->name ("post.store");
Route::put ("post/{post}" , "\Nima\Crud\App\Http\Controllers\PostController@update")->name ("post.update");
Route::delete ("post/{post}" , "\Nima\Crud\App\Http\Controllers\PostController@destroy")->name ("post.destroy");





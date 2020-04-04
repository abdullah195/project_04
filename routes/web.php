<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {

    $article=App\Article::all();

    return view('contact',['articles'=>$article]);
});


Route::get('/article/create','Articlecontroller@create');
Route::put('/article/{article}','Articlecontroller@update');
Route::get('/article/{article}','Articlecontroller@show');
Route::get('/article','Articlecontroller@show');
Route::post('/article','Articlecontroller@store');
Route::get('/article/{article}/edit','Articlecontroller@edit');


Route::get('/about', function () {
    return view('about');
});


Route::get('/test/{post}','postscontroller@show');

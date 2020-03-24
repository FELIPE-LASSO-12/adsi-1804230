<?php

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

Route::get('usuarios', function () {
    $users = App\User::take(25)->get();
    foreach ($users as $user) {
    	echo $user->fullname."<br><hr>";
    }
});
Route::get('categories', function () {
    $categ = App\Categories::all();
    	// dd($categ);
    foreach ($categ as $categories) {
    	echo $categories->name."<br><hr>";
    }
});
Route::get('articles', function () {
    $art = App\Article::take(25)->get();
    foreach ($art as $article) {
    	echo $article->title."<br><hr>";
    }
});

//Resources

Route::resource('users', 'UserController');

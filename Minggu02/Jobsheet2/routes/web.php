<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function(){
    return 'World';
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/user/{name}', function($name){
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postID, $commentID){
    return 'Pos ke-' .$postID. " komentar ke-: " .$commentID;
});

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/user/{name?}', function($name='John'){
    return 'Nama saya ' .$name;
});

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class) -> only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class) -> except([
    'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);


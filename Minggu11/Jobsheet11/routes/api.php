<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\PenjualanController;

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

Route::post('/register', RegisterController::class)->name('register');
Route::post('/register1', RegisterController::class)->name('register1');
Route::post('/login', LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});
Route::post('/logout', LogoutController::class)->name('logout');
Route::get('levels', [LevelController::class, 'index']);
Route::post('levels', [LevelController::class, 'store']);
Route::get('levels/{level}', [LevelController::class, 'show']);
Route::put('levels/{level}', [LevelController::class, 'update']);
Route::delete('levels/{level}', [LevelController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::put('users/{user}', [UserController::class, 'update']);
Route::delete('users/{user}', [UserController::class, 'destroy']);

Route::get('kategories', [KategoriController::class, 'index']);
Route::post('kategories', [KategoriController::class, 'store']);
Route::get('kategories/{kategori}', [KategoriController::class, 'show']);
Route::put('kategories/{kategori}', [KategoriController::class, 'update']);
Route::delete('kategories/{kategori}', [KategoriController::class, 'destroy']);

Route::get('products', [BarangController::class, 'index']);
Route::post('products', [BarangController::class, 'store']);
Route::get('products/{barang}', [BarangController::class, 'show']);
Route::put('products/{barang}', [BarangController::class, 'update']);
Route::delete('products/{barang}', [BarangController::class, 'destroy']);

Route::get('sales', [PenjualanController::class, 'index']);
Route::post('sales', [PenjualanController::class, 'store']);
Route::get('sales/{penjualan}', [PenjualanController::class, 'show']);
Route::put('sales/{penjualan}', [PenjualanController::class, 'update']);
Route::delete('sales/{penjualan}', [PenjualanController::class, 'destroy']);
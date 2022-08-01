<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\VendorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Book;
use App\Models\Vendor;
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

// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

//for user requests
Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

//for book requests
Route::get('books', [BookController::class, 'index']);
Route::get('books/{id}', [BookController::class, 'show']);
Route::post('books/store', [BookController::class, 'store']);
Route::put('books/update', [BookController::class, 'update']);
Route::delete('books/delete/{id}', [BookController::class, 'destroy']);

//for vendor requests
Route::get('vendors', [VendorController::class, 'index']);
Route::get('vendors/{id}', [VendorController::class, 'show']);
Route::post('vendors/store', [VendorController::class, 'store']);
Route::put('vendors/update', [VendorController::class, 'update']);
Route::delete('vendors/delete/{id}', [VendorController::class, 'destroy']);
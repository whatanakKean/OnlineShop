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
 Route::post('users/create', [UserController::class, 'store']);
 Route::put('users/update/{id}', [UserController::class, 'update']);
 Route::delete('users/delete/{id}', [UserController::class, 'destroy']);

 //for book requests
 Route::get('books', [BookController::class, 'index']);
 Route::get('books/{id}', [BookController::class, 'show']);
 Route::post('books/create', [BookController::class, 'store']);
 Route::put('books/update/{id}', [BookController::class, 'update']);
 Route::delete('books/delete/{id}', [BookController::class, 'destroy']);

 //for vendor requests
 Route::get('vendors', [VendorController::class, 'index']);
 Route::get('vendors/{id}', [VendorController::class, 'show']);
 Route::post('vendors/create', [VendorController::class, 'store']);
 Route::put('vendors/update/{id}', [VendorController::class, 'update']);
 Route::delete('vendors/delete/{id}', [VendorController::class, 'destroy']);

//secure route
Route::group(['middleware' => 'auth:sanctum'], function(){
});

//login to get token
Route::post("login",[UserController::class, 'login']);
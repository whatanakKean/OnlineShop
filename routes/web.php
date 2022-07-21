<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersAccountController;
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
    return view('home');
});


Route::match(['get', 'post'], '/page1', function () {
    return view('page1');
})->name("page1");


Route::get('home/{userName}', [HomeController::class, "index"])->name("home");

Route::get("/user", [UsersAccountController::class, 'index']);

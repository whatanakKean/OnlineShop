<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Book;
use App\Models\Vendor;
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
    return redirect('/auth/login');
});
Route::get('/home', function () {
    return view('welcome', ['books' => Book::all()]);
});

Route::get('/books/{id}', function ($id) {
    return view('detailbook', ['book' => Book::find($id), 'vendor' => Vendor::find(Book::find($id)->vendor_id)]);
})->name('detailbook');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/auth/login', function () {
    return view('auth/login');
});

Route::get('/auth/signup', function () {
    return view('auth/signup');
});

Route::post("auth/verifyLogin", [UserController::class, 'login']);
Route::post("auth/getSignup", [UserController::class, 'signup']);














Route::get('/admin', [ AdminController::class, 'users' ]);
// Admin Routes
Route::get('/admin/users', [ AdminController::class, 'users' ])->name('users');
Route::get('/admin/users/create_user', [ AdminController::class, 'create_user' ])->name('create_user');
Route::post('/admin/users/create-user', [ AdminController::class, 'store_user' ])->name('create-user');
Route::get('/admin/users/{id}/delete', [ AdminController::class, 'delete_user' ])->name('delete_user');
Route::get('/admin/users/{id}', [ AdminController::class, 'edit_user' ])->name('edit_user');
Route::post('/admin/users/{id}', [ AdminController::class, 'update_user' ])->name('edit-user');




Route::get('/admin/vendors', [ AdminController::class, 'vendors' ])->name('vendors');
Route::get('/admin/vendors/create_vendor', [ AdminController::class, 'create_vendor' ])->name('create_vendor');
Route::post('/admin/vendors/create-vendor', [ AdminController::class, 'store_vendor' ])->name('create-vendor');
Route::get('/admin/vendors/{id}/delete', [ AdminController::class, 'delete_vendor' ])->name('delete_vendor');
Route::get('/admin/vendors/{id}', [ AdminController::class, 'edit_vendor' ])->name('edit_vendor');
Route::post('/admin/vendors/{id}', [ AdminController::class, 'update_vendor' ])->name('edit-vendor');




Route::get('/admin/books', [ AdminController::class, 'books' ])->name('books');
Route::get('/admin/books/create_book', [ AdminController::class, 'create_book' ])->name('create_book');
Route::post('/admin/books/create-book', [ AdminController::class, 'store_book' ])->name('create-book');
Route::get('/admin/books/{id}/delete', [ AdminController::class, 'delete_book' ])->name('delete_book');
Route::get('/admin/books/{id}', [ AdminController::class, 'edit_book' ])->name('edit_book');
Route::post('/admin/books/{id}', [ AdminController::class, 'update_book' ])->name('edit-book');

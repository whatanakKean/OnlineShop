<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        return view('admin-users', ['users' => User::all()]);
    }
    public function create_user()
    {
        return view('admin-create_user');
    }
    public function delete_user($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users');
    }
    public function edit_user($id)
    {
        return view('admin-edit_user', ['user' => User::find($id)]);
    }
    public function store_user(Request $request)
    {
        $user = new User();
        $user->firstname=request('firstname');
        $user->lastname=request('lastname');
        $user->password=request('password');
        $user->email=request('email');
        $user->tel=request('tel');
        $user->is_seller=request('is_seller');
        $user->save();
        return redirect()->route('users');
    }
    public function update_user(Request $request, $id)
    {
        $user = User::find($id);
        $user->firstname=request('firstname');
        $user->lastname=request('lastname');
        $user->password=request('password');
        $user->email=request('email');
        $user->tel=request('tel');
        $user->is_seller=request('is_seller');
        $user->save();
        return redirect()->route('users')->with('success', 'User updated successfully');
    }



    public function vendors()
    {
        return view('admin-vendors', ['vendors' => Vendor::all()]);
    }
    public function create_vendor()
    {
        return view('admin-create_vendor');
    }
    public function delete_vendor($id)
    {
        $vendor = vendor::find($id);
        $vendor->delete();
        return redirect()->route('vendors');
    }
    public function edit_vendor($id)
    {
        return view('admin-edit_vendor', ['vendor' => vendor::find($id)]);
    }
    public function store_vendor(Request $request)
    {
        $vendor = new Vendor();
        $vendor->user_id=request('user_id');
        $vendor->name=request('name');
        $vendor->img=request('img');
        $vendor->tel=request('tel');
        $vendor->address=request('address');
        $vendor->email=request('email');
        $vendor->save();
        return redirect()->route('vendors');
    }
    public function update_vendor(Request $request, $id)
    {
        $vendor = Vendor::find($id);
        $vendor->user_id=request('user_id');
        $vendor->name=request('name');
        $vendor->img=request('img');
        $vendor->tel=request('tel');
        $vendor->address=request('address');
        $vendor->email=request('email');
        $vendor->save();
        return redirect()->route('vendors')->with('success', 'Vendor updated successfully');
    }




    public function books()
    {
        return view('admin-books', ['books' => Book::all()]);
    }
    public function create_book()
    {
        return view('admin-create_book');
    }
    public function delete_book($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books');
    }
    public function edit_book($id)
    {
        return view('admin-edit_book', ['book' => Book::find($id)]);
    }
    public function store_book(Request $request)
    {
        $book = new Book();
        $book->vendor_id=request('vendor_id');
        $book->name=request('name');
        $book->category=request('category');
        $book->author=request('author');
        $book->description=request('description');
        $book->release_date=request('release_date');
        $book->img=request('img');
        $book->price=request('price');
        $book->quantity=request('quantity');
        $book->save();
        return redirect()->route('books');
    }
    public function update_book(Request $request, $id)
    {
        $book = Book::find($id);
        $book->vendor_id=request('vendor_id');
        $book->name=request('name');
        $book->category=request('category');
        $book->author=request('author');
        $book->description=request('description');
        $book->release_date=request('release_date');
        $book->img=request('img');
        $book->price=request('price');
        $book->quantity=request('quantity');
        $book->save();
        return redirect()->route('books')->with('success', 'Book updated successfully');
    }

}

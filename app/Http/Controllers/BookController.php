<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->vendor_id=$request->vendor_id;
        $book->name=$request->name;
        $book->category=$request->category;
        $book->author=$request->author;
        $book->description=$request->description;
        $book->release_date=$request->release_date;
        $book->img=$request->img;
        $book->price=$request->price;
        $book->quantity=$request->quantity;
        $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $book = Book::find($request->id);
        $book->vendor_id=$request->vendor_id;
        $book->name=$request->name;
        $book->category=$request->category;
        $book->author=$request->author;
        $book->description=$request->description;
        $book->release_date=$request->release_date;
        $book->img=$request->img;
        $book->price=$request->price;
        $book->quantity=$request->quantity;
        $book->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
    }
}

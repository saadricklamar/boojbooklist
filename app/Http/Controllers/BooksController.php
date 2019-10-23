<?php

namespace App\Http\Controllers;

use App\Books;
use App\Http\Resources\BooksResource;
use App\Http\Resources\BooksResourceCollection;
use Illuminate\Http\Request;

class BooksController extends Controller
{   

    /**
     * returns all Books, BooksResourceCollection
     */
    public function index(): BooksResourceCollection
    {
        return new BooksResourceCollection(Books::all());   
    }

    /**
     * creates a new book
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'title'       => 'required',
            'author'      => 'required',
            'publication' => 'required',
        ]);

        $book = Books::create($request->all());

        return new BooksResource($book);
    }

    /**
     * deletes book from database
     */
    public function destroy(Books $book) 
    {
        $book->delete();
        return response()->json();
    }
}

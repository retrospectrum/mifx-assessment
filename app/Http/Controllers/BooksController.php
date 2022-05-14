<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\PostBookRequest;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;

use App\Author;

class BooksController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        // @TODO implement
        $book = Book::all()->orderBy('title', 'asc');
        
        return BookResource::collection();
    }

    public function store(PostBookRequest $request)
    {
        // @TODO implement
        $book = new Book();

        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->author = Author::id()->author;
        $book->description = $request->description;
        $book->published_year = $request->published_year;

        $book->save();

        return new BookResource($book);
    }
}

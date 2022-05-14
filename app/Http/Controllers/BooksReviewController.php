<?php

namespace App\Http\Controllers;

use App\BookReview;
use App\Http\Requests\PostBookReviewRequest;
use App\Http\Resources\BookReviewResource;
use Illuminate\Http\Request;

use App\Books;
use App\User;

class BooksReviewController extends Controller
{
    public function __construct()
    {

    }

    public function store(int $bookId, PostBookReviewRequest $request)
    {
        // @TODO implement
        $bookReview = new BookReview();

        $bookReview->book_id = Books::id()->book_id;
        $bookReview->user_id = $request->user_id;
        $bookReview->review = $request->review;
        $bookReview->comment = $request->comment;

        return new BookReviewResource($bookReview);
    }

    public function destroy(int $bookId, int $reviewId, Request $request)
    {
        // @TODO implement
        $reviewD = BookReview::findOrFail($reviewId);

        $reviewD->delete();
    }
}

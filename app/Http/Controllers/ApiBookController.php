<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class ApiBookController extends Controller
{
    public function index()
    {
        //عملت باجنيت عشان يظهر 2 بس ف api
        $books = Book::paginate(2);

        // $books = Book::all();
        return BookResource::collection($books);
    }
    public function show($id)
    {
        $book = Book::find($id);

        if ($book == null) {
            return  response()->json([
                'msg' => '404 Not found',
            ], 404);
        }
        // return new BookResource($books);ف حالة صف واحد
        return new BookResource($book);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    public function index()
    {
        $items = Book::all();

        return view('book.index',['item' => $items]);
    }
}

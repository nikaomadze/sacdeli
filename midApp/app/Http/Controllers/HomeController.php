<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function getAllBook() {
    	// $books = Book::all();
    	$books = DB::table("books")
    		->select("books.id AS id", "books.title", "genres.genre_name AS genre", "books.author_name AS author_name", "books.description AS description")
    		->leftJoin('genres', 'genres.id', '=','books.genre_id')
    		->get();
    	return view("list", compact("books"));
    }


    public function getBookById($id) {
    	$book = Book::find($id);
    	return view("detailed", compact("book"));
    }

}

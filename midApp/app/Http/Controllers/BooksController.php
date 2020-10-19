<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Redirect;

class BooksController extends Controller
{
    //

	public function getBooksList() {
		return Book::all();
	}


	public function getAdminBooks() {
		$books =  Book::all();
		return view("admin.list", compact("books"));
	}


	public function createBook() {
		return view("admin.create");
	}

	public function createBookRecord(Request $request) {


		$validatedData = $request->validate([
	        'title' => 'required',
	        'genre_id' => 'required|int',
	    ]);


		$book = new Book();
		$book->author_name = $request->get("author_name");
		$book->description = $request->get("description");
		$book->title = $request->get("title");
		$book->genre_id = $request->get("genre_id");
		$book->image_src = "https://saba.com.ge/content/images/book/b/ea084009d1934c6983ddc449c999e761.png";
		$book->save();
		return Redirect("/admin/books");
	}


	public function deleteBookById($id) {
		$book = Book::findOrFail($id)->delete();
		return Redirect("/admin/books");
	}


	public function edit($id) {
    	$book = Book::find($id);
    	return view("admin.edit", compact("book"));
    }

    public function editRecord($id, Request $request) {
    	$book = Book::find($id)->update([
    		'author_name' => $request->input("author_name"),
    		'description' => $request->input("description"),
    		'title' => $request->input("title"),
    		'genre_id' => $request->input("genre_id")
    	]);
    	return Redirect("/admin/books");

    }


}

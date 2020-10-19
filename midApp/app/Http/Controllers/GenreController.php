<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    //
    public function getGenres() {
    	$genres =  Genre::all();
    	return view("admin.genre.list", compact("genres"));
    }

    public function deleteById($id) {
    	Genre::findOrFail($id)->delete();
    	return Redirect("/admin/genre");
    }


    public function createGenre() {
    	return view("admin.genre.create");
    }


    public function createGenreRecord(Request $request) {
    	$errors = $request->validate([
	        'title' => 'required',
	    ]);

	    $genre = new Genre();
		$genre->genre_name = $request->get("title");
		$genre->save();
		return Redirect("/admin/genre");
    }


    public function edit($id) {
    	$genre = Genre::find($id);
    	return view("admin.genre.edit", compact("genre"));
    }

    public function editRecord($id, Request $request) {
    	$genre = Genre::find($id)->update([
    		'genre_name' => $request->input("title")
    	]);
    	return Redirect("/admin/genre");

    }
 
}

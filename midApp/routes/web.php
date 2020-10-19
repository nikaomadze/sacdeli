<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, "getAllBook"]);
Route::get('/detailed/book/{id}', [HomeController::class, "getBookById"]);


Route::get('/admin/books', [BooksController::class, "getAdminBooks"]);
Route::get('/admin/books/create', [BooksController::class, "createBook"]);
Route::post('/admin/books/create', [BooksController::class, "createBookRecord"]);
Route::get('/admin/books/delete/{id}', [BooksController::class, "deleteBookById"]);
Route::get('/admin/books/edit/{id}', [BooksController::class, "edit"]);
Route::post('/admin/books/edit/{id}', [BooksController::class, "editRecord"]);


Route::get('/admin/genre', [GenreController::class, "getGenres"]);
Route::get('/admin/genre/create', [GenreController::class, "createGenre"]);
Route::post('/admin/genre/create', [GenreController::class, "createGenreRecord"]);
Route::get('/admin/genre/delete/{id}', [GenreController::class, "deleteById"]);
Route::get('/admin/genre/edit/{id}', [GenreController::class, "edit"]);
Route::post('/admin/genre/edit/{id}', [GenreController::class, "editRecord"]);
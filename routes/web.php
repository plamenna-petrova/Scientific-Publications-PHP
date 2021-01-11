<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Request as Input;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Index Route
Route::get('/', [IndexController::class, 'index']);

// Route Search By Publication Title
Route::get('/search-title', [PublicationController::class, 'searchByPublicationTitle'])->name('search-title');
// Route Search By Publication Publication Type
Route::get('/search-type', [PublicationController::class, 'searchByPublicationType'])->name('search-type');
// Route For Search Shows all Authors to prevent multiple queries
Route::get('/search-all', [PublicationController::class, 'searchByAuthor']);

// All Publications
Route::get('/publications', [PublicationController::class, 'getAll']);
// Current Publication
Route::get('publications/{id}', [PublicationController::class, 'getById']);

// All Authors
Route::get('/authors', [AuthorController::class, 'getAll']);
// Current Author
Route::get('authors/{id}', [AuthorController::class, 'getById']);


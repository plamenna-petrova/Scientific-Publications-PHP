<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Routing\Controller as BaseController;

class AuthorController extends BaseController
{
    public function getAll() {
        $authors= Author::all();
        return view('layouts/author', compact('authors'));
    }

    public function getById($id)
    {
        //Get Author by Id
        $author = Author::where('id', $id)
            ->first();

        return view('layouts/single-author', compact('author'));
    }

    public function searchByAuthorFullName(Request $request){
        //Get the search value from the request
        $search = $request->input('search-author');

        //Search in the title and body columns from the authors table
        $authors = Author::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();

        //Return the search view with the results
        return view('layouts/author', compact('authors'));
    }

}

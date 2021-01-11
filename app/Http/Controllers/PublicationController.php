<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Author;
use Illuminate\Routing\Controller as BaseController;

class PublicationController extends BaseController
{

    public function getAll()
    {
       $publications = Publication::all();
       return view('layouts/publication', compact('publications'));
    }

    public function getById($id)
    {
       //Get Publication By Id
       $publication = Publication::where('id', $id)
                             ->first();

       return view('layouts/single-publication', compact('publication'));
    }

    public function searchByPublicationTitle(Request $request)
    {
        //Get the search value from the request
        $search = $request->input('search-title');

        //Search in the title and body columns from the publications table
        $publications = Publication::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->get();

        //Return the search view with results
        return view('layouts/publication', compact('publications'));
    }

    public function searchByPublicationType(Request $request){
        //Get the search value from the request
        $search = $request->input('search-type');

        //Search in the title and body columns from the publications table
        $publications = Publication::query()
          ->where('type', 'LIKE', "%{$search}%")
          ->get();

        //Return the search view with the results
        return view('layouts/publication', compact('publications'));
    }

    public function searchByAuthor(Request $request){
        $authors = Author::all();
        return view('layouts/search', compact('authors'));
    }
}

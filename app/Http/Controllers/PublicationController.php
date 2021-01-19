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
//       $publications = \DB::table('publications')
//           ->join('publication_authors','publications.id','=','publication_authors.publication_id')
//           ->join('authors','authors.id','=','publication_authors.author_id')
//           ->select('publications.*')
//           ->addselect("authors.name as authors")
//           ->get();
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

    public function searchByPublicationType(Request $request)
    {
        //Get the search value from the request
        $search = $request->input('search-type');

        //Search in the title and body columns from the publications table
        $publications = Publication::query()
            ->where('type', 'LIKE', "%{$search}%")
            ->get();

        //Return the search view with the results
        return view('layouts/publication', compact('publications'));
    }

    public function searchByAuthor(Request $request)
    {
        $authors = Author::all();
        return view('layouts/search', compact('authors'));
    }

    //Applying complex search to search by Publication Title, Publication Type and Author Full Name
    public function complexSearch(Request $request)
    {
        //Get the search value from the request
        $search = $request->input('complex-search');

        $publications = Publication::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('type', 'LIKE', "%{$search}%")
            ->get();

        $authors = Author::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();

        return view('layouts/complex-search', compact(['publications', 'authors']));
    }

    //Applying search to search Publications by their Title, Type and Author
    public function searchPublicationsBy(Request $request)
    {
       //Get the search value from the request
        $search = $request->get('search-publications-by');

        $publications = \DB::table('publications')->paginate(5);

        if ($request[('search_by')] == 'title') {
            $publications = \DB::table('publications')
                ->where('title', 'like', '%'. $search .'%')
                ->paginate(5);
        } else if ($request[('search_by')] == 'type') {
            $publications = \DB::table('publications')
                ->where('type', 'like', '%' . $search . '%')
                ->paginate(5);
        } else if ($request[('search_by')] == 'author_name') {
            $publications = \DB::table('publications')
                ->join('publication_authors','publications.id','=','publication_authors.publication_id')
                ->join('authors','authors.id','=','publication_authors.author_id')
                ->where('authors.name', 'like', '%'. $search.'%')
                ->paginate(5);
        }

        return view('layouts/publication', compact('publications'));
    }

}

@extends('layouts.app')
@section('content')
    <div id="wrapper" class="container">
        <div id="page" class="row">
            <div id="content" class="inner-content">
                <div class="offset-4">
                    <div class="searchWrapper" id="searchPublicationTitle">
                        <form action="{{ route('search-title') }}" method="GET" class="d-inline align-items-center">
                            <input class="input-group-text d-inline" type="text"
                                   name="search-title" placeholder="Title:" required/>
                            <button class="btn btn-secondary" type="submit">Search by Title</button>
                        </form>
                    </div>
                    <div class="searchWrapper" id="searchPublicationType">
                        <form action="{{ route('search-type') }}" method="GET" class="d-inline align-items-center">
                            <input class="input-group-text d-inline" type="text"
                                   name="search-type" placeholder="Type:" required/>
                            <button class="btn btn-secondary" type="submit">Search by Type</button>
                        </form>
                    </div>
                    <div class="searchWrapper" id="searchAuthor">
                        @foreach($authors as $author)
                            <a class="authorButton" href="{{ url('authors/'.$author->id) }}" > {{$author->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

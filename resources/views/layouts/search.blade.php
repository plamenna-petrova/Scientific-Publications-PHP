@extends('layouts.app')
@section('content')
    <div id="wrapper" class="container">
        <div id="page" class="row">
            <div id="content" class="inner-content" style="margin: 0 auto">
                <h2 style="text-align:center; color:black; font-weight: bold">Search by Single Condition</h2>
                <div class="searchWrapper" id="searchPublicationTitle">
                    <form action="{{ route('search-title') }}" method="GET" class="d-inline align-items-center">
                        <input class="input-group-text d-inline" type="text"
                               name="search-title" style="margin-bottom: 20px; font-size: 20px" placeholder="Title:" required/>
                        <button class="button primary" style="margin-left: auto; margin-right: auto; display: block; font-size: 18px" type="submit">Search by Title</button>
                    </form>
                </div>
                <div class="searchWrapper" id="searchPublicationType">
                    <form action="{{ route('search-type') }}" method="GET" class="d-inline align-items-center">
                        <input class="input-group-text d-inline" type="text"
                               name="search-type" style="margin-bottom: 20px; font-size: 20px" placeholder="Type:" required/>
                        <button class="button primary" style="margin-left: auto; margin-right: auto; display: block; font-size: 18px" type="submit">Search by Type</button>
                    </form>
                </div>
                <div class="searchWrapper" id="searchAuthorName">
                    <form action="{{ route('search-author') }}" method="GET" class="d-inline align-items-center">
                        <input class="input-group-text d-inline" type="text"
                               name="search-author" style="margin-bottom: 20px; font-size: 20px" placeholder="Author name:" required/>
                        <button class="button primary" style="margin-left: auto; margin-right: auto; display: block; font-size: 18px" type="submit">Search by Author Name</button>
                    </form>
                </div>
                <h2 style="color: black; font-weight: bold; text-align: center">Search by Publication Title, Type or Author Name</h2>
                <div class="searchWrapper" id="complexSearch">
                    <form action="{{ route('complex-search') }}" method="GET" class="d-inline align-items-center">
                        <input class="input-group-text d-inline" type="text"
                               name="complex-search" style="margin-bottom: 20px; font-size: 20px" placeholder="Search by the given conditions:" required/>
                        <button class="button primary" style="margin-left: auto; margin-right: auto; display: block; font-size: 18px" type="submit">Complex Search</button>
                    </form>
                </div>
                <h2 style="color: black; font-weight: bold; text-align: center">Find authors</h2>
                <div class="searchWrapper" id="searchAuthor">
                    @foreach($authors as $author)
                        <a class="authorButton" style="font-size: 20px; text-decoration: none; font-weight: bold" href="{{ url('authors/'.$author->id) }}"> {{$author->name}},</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

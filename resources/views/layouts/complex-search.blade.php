@extends('layouts.app')
@section('content')
    <div id="wrapper" class="container">
        <div id="authorPage" class="row">
            <div id="content" style="margin: 0 auto">
                <h2 style="text-align: center; color: black; font-weight: bold">Complex Search Results</h2>
                <section style="justify-content: center">
                    @foreach($authors->reverse() as $author)
                        <div class="authors" style="border: 3px solid black; margin-bottom: 15px; padding: 4px; background-color: lightgrey">
                            <h3 style="font-family: cursive; color: darkred; font-weight: bold">Author full name: {{$author->name}}</h3>
                            <h3 style="font-family: cursive; color: darkred; font-weight: bold">Occupation: {{$author->occupation}}</h3>
                            <h3 style="font-family: cursive; color: darkred; font-weight: bold">Author Image:</h3>
                            <img style="height: 300px; width: 300px; display: block; margin-left: auto; margin-right: auto; margin-bottom: 15px" src="{{$author->image}}" alt="noPic">
                        </div>
                    @endforeach
                </section>
                <section style="justify-content: center;">
                    @foreach($publications->reverse() as $publication)
                        <div class="publications" style="border: 3px solid black; margin-bottom: 15px; padding: 4px; background-color: lightgrey">
                            <h3 style="font-family: cursive; color: darkred; font-weight: bold">Title: {{$publication->title}}</h3>
                            <h3 style="font-family: cursive; color: darkred; font-weight: bold">Excerpt: {!!$publication->excerpt!!}</h3>
                            <h3 style="font-family: cursive; color: darkred; font-weight: bold">Type: {{$publication->type}}</h3>
                        </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>

@endsection

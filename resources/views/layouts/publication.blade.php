@extends('layouts.app')
@section('content')
    <div id="wrapper" class="container">
        <div id="publicationPage" class="row">
            <div id="content" style="margin: 0 auto">
                <h2 style="text-align: center; color: black; font-weight: bold">Scientific Publications</h2>
                <section style="justify-content: center;">
                    @foreach($publications->reverse() as $publication)
                        <div class="publications" style="border: 3px solid black; margin-bottom: 15px; padding: 4px; background-color: lightgrey">
                            <h3 style="font-family: cursive; color: darkred; font-weight: bold">Title: {{$publication->title}}</h3>
                            <h3 style="font-family: cursive; color: darkred; font-weight: bold">Excerpt: {!!$publication->excerpt!!}</h3>
                            <h3 style="font-family: cursive; color: darkred; font-weight: bold">Type: {{$publication->type}}</h3>
{{--                            <h3 style="font-family: cursive; color: darkred; font-weight: bold">Authors: {{$publication->authors}}</h3>--}}
                        </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
@endsection

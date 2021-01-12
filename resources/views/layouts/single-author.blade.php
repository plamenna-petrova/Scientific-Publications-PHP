@extends('layouts.app')
@section('content')
    <div id="wrapper" class="container">
        <div id="singleAuthor" class="row">
            <div id="content" style="margin: 0 auto">
                <h2 style="text-align: center; color: black; font-weight: bold">Single Author</h2>
                <div class="single-author-info" style="border: 3px solid black; margin-bottom: 15px; padding: 4px; background-color: lightgrey">
                    <h3 style="font-family: cursive; color: darkred; font-weight: bold">Name: {{$author->name}}</h3>
                    <h3 style="font-family: cursive; color: darkred; font-weight: bold">Occupation: {{$author->occupation}}</h3>
                    <h3 style="font-family: cursive; color: darkred; font-weight: bold">Author Image:</h3>
                    <img style="height: 300px; width: 300px; display: block; margin-left: auto; margin-right: auto; margin-bottom: 15px" src="/{{$author->image}}" alt="noPic">
                </div>
            </div>
        </div>
    </div>
@endsection



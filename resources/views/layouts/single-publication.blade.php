@extends('layouts.app')
@section('content')
    <div class="wrapper" class="container">
        <div id="singlePublication" class="row">
          <div id="content" style="margin: 0 auto">
              <h2 style="text-align: center; color: black; font-weight: bold">Single Publication</h2>
              <div class="single-publication-info" style="border: 3px solid black; margin-bottom: 15px; padding: 4px; background-color: lightgrey">
                  <h3 style="font-family: cursive; color: darkred; font-weight: bold">Title: {{$publication->title}}</h3>
                  <h3 style="font-family: cursive; color: darkred; font-weight: bold">Excerpt: {!!$publication->excerpt!!}</h3>
                  <h3 style="font-family: cursive; color: darkred; font-weight: bold">Type: {{$publication->type}}</h3>
              </div>
          </div>
        </div>
    </div>
@endsection


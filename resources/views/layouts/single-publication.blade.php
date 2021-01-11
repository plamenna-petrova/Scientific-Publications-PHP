@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card box-shadow">
            <p>Title: {{$publication->title}}</p>
            <p>Excerpt: {{$publication->excerpt}}</p>
            <p>Type: {{$publication->type}}</p>
        </div>
    </div>
@endsection

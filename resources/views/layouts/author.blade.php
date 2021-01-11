@extends('layouts.app')
@section('content')
    <div id="wrapper" class="container">
        <div id="page" class="row">
            <section class="row">
                @foreach($authors as $author)
                    <div class="authors">
                        <p>Author full name: {{$author->name}}</p>
                        <p>Occupation: {{$author->occupation}}</p>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
@endsection

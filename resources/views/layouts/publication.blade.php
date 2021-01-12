@extends('layouts.app')
@section('content')
    <div id="wrapper" class="container">
        <div id="page" class="row">
            <div id="content">
                <section class="row">
                    @foreach($publications->reverse() as $publication)
                        <div class="publications">
                            <p>Title: {{$publication->title}}}</p>
                            <p>Excerpt: {{$publication-> excerpt}}</p>
                            <p>Type: {{$publication->type}}</p>
                        </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
@endsection

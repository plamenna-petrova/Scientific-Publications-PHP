@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card box-shadow">
            <p>Name: {{$author->name}}</p>
            <p>Occupation: {{$author->occupation}}</p>
        </div>
    </div>
@endsection

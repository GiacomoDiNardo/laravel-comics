@extends('layouts.app')

@section('page_content')

<div class="container py-5">
    <div class="row">
        <div class="col-8">
            <h3>{{ $comic['title'] }}</h3>
            <p>{{ $comic['description'] }}</p>
        </div>

        <div class="col-4">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
    </div>
</div>

@endsection
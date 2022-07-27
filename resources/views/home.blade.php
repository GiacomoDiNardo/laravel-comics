@extends('layouts.app')

@section('page_title', 'Comics')

@section('page_content')

<div class="jumbotron"></div>

<div class="bg-black-banner">
    <div class="container position-relative pb-3">
      <button class="btn btn-primary position-absolute jumbo-btn fs-4">
        CURRENT SERIES
      </button>

      <div class="row row-cols-6 g-4 py-5">
        @foreach ($comics as $comic)
            
            <a href="{{ route("comicDetails", $comic['id']) }}" class="col">
                <img src="{{ $comic['thumb']}}" alt="{{$comic['series']}}" />
                <div class="card-body">{{ $comic['series'] }}</div>
            </a>
        @endforeach
      </div>

        <div class="text-center">
          <button class="btn btn-primary text-center m-auto">LOAD MORE</button>
        </div>
    </div>
  </div>

@endsection
@extends('layouts.main')

@section('title','Home')

@section('content')
<div class="container">
    <div class="row">
        @forelse ($comics as $comic)
        <div class="col-6 mx-auto">
            <div class="card w-50">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->series}}</h5>
                  <p class="card-text">{{$comic->price}}</p>
                  <a href="#" class="btn btn-primary">Go somewgere</a>
                </div>
              </div>
        </div>
        @empty
            <h1>No comics available</h1>
        @endforelse
    </div>
</div>
@endsection
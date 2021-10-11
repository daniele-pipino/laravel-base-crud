@extends('layouts.main')

@section('title','Home')

@section('content')
<div class="container">
    <div class="row">
        @forelse ($comics as $index => $comic)
            <div class="col-3">
                <div class="card">
                        <img src="{{$comic->thumb}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->series}}</h5>
                            <p class="card-text">{{$comic->price}}</p>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Dettagli</a>
                        </div>
                    
                </div>
            </div>
         @empty
            <h1 class="text-center my-5">No comics available</h1>
        @endforelse
    </div>
</div>
@endsection
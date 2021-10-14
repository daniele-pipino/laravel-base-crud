@extends('layouts.main')

@section('title','Home')
{{-- alert in caso di eliminazione comci --}}
@if (session('type'))
    <div class="alert alert-{{session('type')}}" role="alert">
        {{session('msg')}}
    </div>
@endif
{{--  --}}
@section('content')
<div class="container">
    <div class="row g-2">
        @forelse ($comics as $index => $comic)
            <div class="col-4">
                <div class="card">
                        <img src="{{$comic->thumb}}" class="card-img-top  w-25" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->series}}</h5>
                            <p class="card-text">{{$comic->price}}</p>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Dettagli</a>
                            <form action="{{route('comics.restore', $comic->id)}}" method="POST" >
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Ripristina</button>
                             </form>
                        </div>
                </div>
            </div>
         @empty
            <h1 class="text-center my-5">No comics available</h1>
        @endforelse
    </div>
</div>
@endsection
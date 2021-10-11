@extends('layouts.main')
@section('name','Detail')
@section('content')
<div class="card">    
  <img src="{{$comic->thumb}}" class="card-img-top w-25" alt="{{$comic->series}}">
  <div class="card-body">
    <h5 class="card-title">{{$comic->title}}</h5>
    <p class="card-text">{{$comic->description}}</p>
    <a href="{{route('comics.index')}}" class="btn btn-primary">Go back</a>
  </div>
</div>
@endsection
@extends('layouts.main')

@section('name','Detail')

@section('content')
<div class="container">
  <div class="card w-50 mx-auto d-flex" >
    <img src="{{$comic->thumb}}" class="card-img-top w-25" alt="...">
    <div class="card-body">
      <h4 class="card-text text-primary">{{$comic->title}}</h4>
      <p class="card-text">{{$comic->description}}</p>
      <p class="card-text">Price: {{$comic->price}}</p>
    </div>
  </div>
</div>
@endsection
@extends('layouts.main')

@section('title','Modifica')
    
@section('content')

<div class="container">
    <div class="row">
        <div class="col-9 mx-auto border-secondary rounded-pill mt-5">

            @if ($comic->exist)
                <form method="POST" action="{{route('comics.update',$comic->id)}}" class="col-12">
                    @csrf
                    @method('PATCH')
            @else
                <form method="POST" action="{{route('comics.store')}}" class="col-12">
                    @csrf
            @endif        
                <div class="mb-3 col-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" placeholder="Comic title">
                  </div>
                  {{--  --}}
                  <div class="mb-3 col-6">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}" placeholder="Comic series">
                  </div>
                  {{--  --}}
                  <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"  rows="3">{{$comic->description}}</textarea>
                  </div>
                    {{--  --}}
                    <div class="mb-3 col-6">
                        <label for="type" class="form-label">Price</label>
                        <input type="price" class="form-control" id="price" name="price" value="{{$comic->price}}" placeholder="Comic series">
                      </div>
                        {{--  --}}
                  <div class="mb-3 col-6">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}" placeholder="Comic series">
                  </div>
                    {{--  --}}
                    <div class="mb-3 col-6">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}" placeholder="Comic series">
                      </div>
                        {{--  --}}
                  <div class="mb-3 col-6">
                    <label for="sale_date" class="form-label">Sale_date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" placeholder="Comic series">
                  </div>
                    {{--  --}}
                    <div class="mb-3 col-6">
                       <button type="submit">Invia</button>
                      </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
@extends('layouts.main')

@section('title','Create')
    
@section('content')

<div class="container">
    <div class="row">
        <div class="col-9 mx-auto border-secondary rounded-pill mt-5">
            <form method="POST" action="{{route('comics.store')}}" class="col-12">
                @csrf
                <div class="mb-3 col-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Comic title">
                  </div>
                  {{--  --}}
                  <div class="mb-3 col-6">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Comic series">
                  </div>
                  {{--  --}}
                  <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                  </div>
                    {{--  --}}
                    <div class="mb-3 col-6">
                        <label for="type" class="form-label">Price</label>
                        <input type="price" class="form-control" id="price" name="price" placeholder="Comic series">
                      </div>
                        {{--  --}}
                  <div class="mb-3 col-6">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Comic series">
                  </div>
                    {{--  --}}
                    <div class="mb-3 col-6">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Comic series">
                      </div>
                        {{--  --}}
                  <div class="mb-3 col-6">
                    <label for="sale_date" class="form-label">Sale_date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Comic series">
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
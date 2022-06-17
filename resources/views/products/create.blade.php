@extends('layouts.base')

@section('pageTitle', 'Nuovo Prodotto')

@section('mainContent')
<main>
    <div class="container">
        <h1>Modifica Fumetto</h1>
        <form action="{{route('products.store')}}" method="post" >
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" name="title" placeholder="Insert title" value="{{old('title')}}">
              @error('title')
                  <div class="alert-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea  id="description" name="description" class="w-100" cols="10" rows="10"></textarea>
            </div>
            <div class="mb-3">
            <label for="type" class="form-label">Select type</label>
            <select type="select" class="form-control" id="type" name="type">
                <option value="comic book">comic book</option>
                <option value="graphic novel">graphic novel</option>
            </select>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" @error('series') is-invalid @enderror id="series" name="series" placeholder="Insert series"value="{{old('series')}}">
                @error('series')
                  <div class="alert-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" @error('sale_date') is-invalid @enderror id="sale_date" name="sale_date" placeholder="Insert Sale Date"value="{{old('sale_date')}}">
                @error('sale_date')
                  <div class="alert-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control"@error('thumb') is-invalid @enderror id="thumb" name="thumb" placeholder="Insert image" placeholder="Url image"value="{{old('thumb')}}">
                @error('thumb')
                  <div class="alert-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number"min="0" max="10000" step=".01"class="form-control" @error('price') is-invalid @enderror id="price" name="price"value="{{old('price')}}">
                @error('price')
                  <div class="alert-danger">{{$message}}</div>
                @enderror
              </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>
</main>
    
@endsection
@extends('layouts.base')

@section('pageTitle', 'Nuovo Prodotto')

@section('mainContent')
<main>
    <div class="container">
        <h1>Nuovo Prodotto</h1>
        <form action="{{route('products.update',$book->id)}}" method="post" >
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control " id="title" name="title" placeholder="Insert title"
              value="{{$book->title}}">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea  id="description" name="description" class="w-100" cols="10" rows="10">{{$book->description}}</textarea>
            </div>
            <div class="mb-3">
            <label for="type" class="form-label">Select type</label>
            <select type="select" class="form-control" id="type" name="type">
                <option value="comic book" {{$book->type == 'comic book' ? 'selected':''}}>comic book</option>
                <option value="graphic novel"{{$book->type == 'graphic novel' ? 'selected':''}}>graphic novel</option>
            </select>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Insert series" value="{{$book->series}}">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Insert Sale Date" value="{{$book->sale_date}}">
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert image" placeholder="Url image"value="{{$book->thumb}}">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" min="0" max="10000" step=".01" id="price" name="price" value="{{$book->price}}">
              </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
          </form>
    </div>
</main>
    
@endsection
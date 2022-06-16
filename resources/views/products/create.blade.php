@extends('layouts.base')

@section('pageTitle', 'Nuovo Prodotto')

@section('mainContent')
<main>
    <div class="container">
        <h1>Nuovo Prodotto</h1>
        <form action="{{route('products.store')}}" method="post" >
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control " id="title" name="title" placeholder="Insert title">
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
                <input type="text" class="form-control" id="series" name="series" placeholder="Insert series">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Insert Sale Date">
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert image" placeholder="Url image">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control"min="0" max="1000" id="price" name="price">
              </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>
</main>
    
@endsection
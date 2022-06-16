@extends('layouts.base')

@section('pageTitle', 'Prodotti')

@section('mainContent')
<main>
    <div class="container">
        <h1>Fumetti</h1>
        <div class="row">

            @foreach ($prodotti as $prodotto)
            <div class="col">
                <div class="card" style="width: 18rem;" class="">
                    <img src="{{$prodotto->thumb}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$prodotto->title}}</h5>
                      {{-- <p class="card-text">{{$prodotto->description}}</p> --}}
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{$prodotto->series}}</li>
                      <li class="list-group-item">{{$prodotto->type}}</li>
                      <li class="list-group-item">{{$prodotto->price}}</li>
                    </ul> 
                     <div class="card-body">
                    <a href="{{route('products.show',$prodotto->id)}}" class="btn btn-primary">Vai al Fumetto</a>
                    <a href="{{route('products.show',$prodotto->id)}}" class="btn btn-warning my-2">Modifica Fumetto</a>
                      
                    </div>
                  </div>
            </div>
            @endforeach



        </div>
    </div>
</main>

    
@endsection
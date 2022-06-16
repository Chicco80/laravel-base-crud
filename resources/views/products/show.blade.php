@extends('layouts.base')

@section('pageTitle', 'Prodotto')

@section('mainContent')
<main>
    <div class="container">
        <h1>Fumetto</h1>
        <div class="container">
            <div class="row">
               
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$book->thumb}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$book->title}}</h5>
                              <p class="card-text">{!!$book->description!!}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">{{$book->series}}</li>
                              <li class="list-group-item">{{$book->type}}</li>
                              <li class="list-group-item">{{$book->price}}</li>
                            </ul>
                          </div>
                    </div>
                
            </div>
        </div>
    </div>
</main>
    
@endsection
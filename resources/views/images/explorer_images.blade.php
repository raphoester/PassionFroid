@extends('layouts.app')

@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="/css/recherche.css">
<div class="container">
  <div class="title">
    <h1>Explorer la réserve d'images</h1>
  </div>
  <br>
  <div class="row g-2">
    @foreach ($images as $resultat)
      <div class="col-6" style="width: 100px; margin-bottom: 20px;">
        <div class="p-3 border bg-light" style="display: flex;">
          <div style="margin-right: 100px;">
            <img style="width: 200px; object-fit: cover; height: 200px;" class="d-flex align-self-start" src="{{$resultat->url}}">
          </div>
          <div style="margin-top : 30px;">
            <h4>{{$resultat->nom ?? "Pas de titre"}}</h4>
            <p><a href="/i/{{$resultat->id}}">Détails</a></p>
          </div>
        </div>
        
      </div>
    @endforeach
  </div>
</div>


@endsection
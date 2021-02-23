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
  @foreach ($images as $image)

  <div class="media">
    
    <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
    </div>
    
    <img class="d-flex align-self-start" src="{{$image->url}}"
        alt="Generic placeholder image">
    <div class="media-body pl-3">
      <div class="price">{{$image->nom}}<small>{{$image->type}}</small></div>
      <div class="stats"><span>👤 {{$image->credits}}</span></div>
      <a href="/i/{{$image->id}}" style="float: right; margin-right: 50px;">Plus de détails </a>
    </div>
  </div>
  @endforeach
</div>


@endsection
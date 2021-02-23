@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div>
                    <h1 >Image #{{$image->id}}</h1>
                    <button style='float:right; margin-left: 10px;' class='btn btn-dark' onclick="location.href='/modif/{{$image->id}}'" type="button">Modifier les détails</button>
                    <button style='float:right;' class='btn btn-danger' onclick="location.href='/suppr/{{$image->id}}'" type="button">Supprimer l'image</button>
                </div>
                <div>
                    @php
                    $liste_tags = explode(",",  $image->tags);
                @endphp
                    @foreach($liste_tags as $tag)
                        <p style="display: inline; font-size: larger;"><span class="badge badge-primary">{{$tag}}</span></p>
                    @endforeach
                </div>
                <br>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-6 how-img">
                        <a href="{{$image->url}}"><img src="{{$image->url}}" class="img-fluid" alt=""/></a>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <ul class="list-group" style="float: left; min-width: 500px;">
                            <li class="list-group-item">Nom : {{$image->nom}}</li>
                            <li class="list-group-item">Type : {{$image->type}}</li>
                            <li class="list-group-item">Contient un produit : {{$image->produit}}</li>
                            <li class="list-group-item">Personne représentée : {{$image->humain}}</li>
                            <li class="list-group-item">Image institutionnelle : {{$image->institutionnelle}}</li>
                            <li class="list-group-item">Dimensions : {{$image->largeur}} x {{$image->hauteur}} pixels </li>
                            <li class="list-group-item">Propriétaire : {{$image->credits}}</li>
                            <li class="list-group-item">Droits limités : {{$image->droitsLimites}}</li>
                            <li class="list-group-item">Date de fin des droits : {{$image->dateFinDroits}}</li>
                            <li class="list-group-item">Mise en ligne le : {{$image->created_at}}</li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

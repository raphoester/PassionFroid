@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h1>Image #{{$image->id}}</h1>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-6 how-img">
                        <img src="{{$image->url}}" class="img-fluid" alt=""/>
                    </div>
                    <div class="col-md-6">
                        <h3>{{$image->nom}}</h3>
                        <h4 class="subheading">{{$image->type}}</h4>
                        <ul class="list-group">
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Résultats de la recherche</h1>
            {{$resultats}}
        </div>
    </div>
</div>
@endsection

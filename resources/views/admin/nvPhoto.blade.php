@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Mettre en ligne une photo</h1>
            <form>
            <label for ="desc">Description de l'image :</label><br>
            <input type ="text" id="desc" name ="desc" value=""><br>
            </form>
        </div>
    </div>
</div>
@endsection

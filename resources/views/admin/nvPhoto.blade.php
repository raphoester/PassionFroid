@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Mettre en ligne une photo</h1>
            <form method="POST">
            <label for ="desc">Description de l'image :</label><br>
            <input type ="text" id="desc" name ="desc" value=""><br>
            <label for ="takenby">Pris avec :</label><br>
            <input type ="text" id="takenby" name ="takenby" value=""><br>
            <input type ="submit">
            </form>
        </div>
    </div>
</div>
@endsection

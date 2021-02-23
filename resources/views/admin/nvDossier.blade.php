@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Mettre en ligne un ensemble d'images</h1>
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="image">Déposez vos images...</label><br>
                    <input required type="file" name="images[]" id="image" accept="image/*" required multiple>
                </div>
                <br>
                <div>
                    <input id="submit-form-img-groupe" type ="submit" value="Mettre en ligne" style='display:block;'>
                    <label for="submit-form-img-groupe">Attention : vous devrez ensuite remplir chaque caractéristique de chaque image à la main.</label>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

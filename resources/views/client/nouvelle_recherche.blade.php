@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Rechercher une photo</h1>
            <form action="" method="POST">
                @csrf
                <div>
                    <label for ="nom">Nom :</label><br>
                    <input type ="text" id="nom" name ="nom" value=""><br><br>
                </div>
                <div>
                    <label for ="type">Type de photo :</label><br>
                    <input type ="text" id="type" name ="type" value=""><br><br>                                   
                </div>
                <div>
                    <input type ="checkbox" id="produit" name="produit" value="produit">
                    <label for="produit">Le produit est sur la photo</label><br><br>
                </div>
                <div>
                    <input type ="checkbox" id="humain" name="humain" value="humain">
                    <label for="humain">Une personne est sur la photo</label><br><br>
                </div>
                <div>
                    <input type ="checkbox" id="institutionelle" name="institutionelle" value="institutionelle">
                    <label for="institutionelle">La photo a un but institutionnel</label><br><br>
                </div>
                <div>
                    <label for ="credits">Propriétaire de la photo</label><br>
                    <input type ="text" id="credits" name ="credits" value=""><br><br>
                </div>
                <div>
                <p for="format">Format d'image :</label><br><br>
                    <label for="format-v">Vertical</label>&nbsp
                    <input type ="radio" id="format-v" name="format" value="true"><br>
                    <label for="format-h">Horizontal</label>
                    <input type ="radio" id="format-h" name="format" value="false"><br>
                </div>
                <div>
                    <label for ="tags">Tags :</label><br>
                    <input type ="text" id="tags" name ="tags" value=""><br><br>
                    <input type ="submit" value="Rechercher">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
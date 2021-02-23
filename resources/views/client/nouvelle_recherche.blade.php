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
                    <input type ="text" id="nom" name ="nom" ><br><br>
                </div>
                <div>
                    <label for ="type">Type de photo :</label><br>
                    <input type ="text" id="type" name ="type"><br><br>                                 
                </div>
                <div>
                    <input type ="checkbox" id="produit" name="produit" value="true">
                    <label for="produit">Le produit est sur la photo</label><br>
                </div>
                <div>
                    <input type ="checkbox" id="humain" name="humain" value="true">
                    <label for="humain">Une personne est sur la photo</label><br>
                </div>
                <div>
                    <input type ="checkbox" id="institutionelle" name="institutionelle" value="true">
                    <label for="institutionelle">La photo a un but institutionnel</label><br><br>
                </div>
                <div>
                    <label for ="credits">Propriétaire de la photo</label><br>
                    <input type ="text" id="credits" name ="credits"><br><br>
                </div>
                <div>
                <p for="format">Formats d'image :</label><br>
                    <input type ="checkbox" id="format-v" name="vertical" value="true">
                    <label for="format-v">Vertical</label><br>
                    <input type ="checkbox" id="format-h" name="horizontal" value="true">
                    <label for="format-h">Horizontal</label>
                </div>
                <div>
                    <label for ="tags">Tags :</label><br>
                    <input type ="text" id="tags" name ="tags"><br><br>
                    <input type ="submit" value="Rechercher">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
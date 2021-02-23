@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto ">
            <div class="card">

                <div class="card-header">
                    <h1>Rechercher une photo</h1>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom">Nom :</label><br>
                            <input type="text" id="nom" name="nom"><br>
                        </div>
                        <div class="form-group">
                            <label for="type">Type de photo :</label><br>
                            <input type="text" id="type" name="type"><br>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="produit" name="produit" value="true">
                            <label for="produit">Le produit est sur la photo</label><br>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="humain" name="humain" value="true">
                            <label for="humain">Une personne est sur la photo</label><br>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="institutionelle" name="institutionelle" value="true">
                            <label for="institutionelle">La photo a un but institutionnel</label><br>
                        </div>
                        <div class="form-group">
                            <label for="credits">Propriétaire de la photo</label><br>
                            <input type="text" id="credits" name="credits"><br>
                        </div>
                        <div class="form-group">
                            <p for="format">Formats d'image :</label><br>
                                <input type="checkbox" id="format-v" name="vertical" value="true">
                                <label for="format-v">Vertical</label><br>
                                <input type="checkbox" id="format-h" name="horizontal" value="true">
                                <label for="format-h">Horizontal</label>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags (séparés par une virgule) :</label><br>
                            <input type="text" id="tags" name="tags"><br>

                        </div>
                        <div class="form-group">
                            <label for="tags_a_exclure">Tags à exclure(séparés par une virgule) :</label><br>
                            <input type="text" id="tags_a_exclure" name="tags_a_exclure"><br>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Rechercher">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
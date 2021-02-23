@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-header">
                    <h1>Mettre en ligne une photo</h1>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <label for="nom">Nom :</label><br>
                            <input type="text" id="nom" name="nom" value=""><br>
                        </div>
                        <div>
                            <label for="type">Type de photo :</label><br>
                            <input type="text" id="type" name="type" value=""><br><br>
                        </div>
                        <div class="form-group" class="champ-de-formulaire">
                            <p>Le produit est-il sur la photo ?</p>
                            <label for="produit-oui">Oui</label>
                            <input type="radio" id="produit-oui" name="produit" value="true"><br>
                            <label for="produit-non">Non</label>
                            <input type="radio" id="produit-non" name="produit" value="false" required><br>
                        </div>
                        <div class="form-group">
                            <p>Une personne est-elle présente sur la photo ?</p>
                            <label for="huamin-oui">Oui</label>&nbsp
                            <input type="radio" id="humain-oui" name="humain" value="true"><br>
                            <label for="humain-non">Non</label>
                            <input type="radio" id="humain-non" name="humain" value="false"><br>
                        </div>
                        <div class="form-group">
                            <p>Cette photo a-t-elle été prise dans un but institutionnel?</label><br><br>
                                <label for="institutionelle-oui">Oui</label>&nbsp
                                <input type="radio" id="institutionelle-oui" name="institutionnelle" value="true"><br>
                                <label for="institutionelle-non">Non</label>
                                <input type="radio" id="institutionelle-non" name="institutionnelle" value="false"><br>
                        </div>
                        <div class="form-group">
                            <label for="credits">Détenteur de la photo :</label><br>
                            <input type="text" id="credits" name="credits" value=""><br>
                        </div>
                        <div class="form-group">
                            <p>Les droits d'utilisation de cette photo sont ils limités ?</label><br><br>
                                <label for="droitsLimites-oui">Oui</label>&nbsp
                                <input type="radio" id="droitsLimite-oui" name="droitsLimites" value="true"><br>
                                <label for="droitsLimites-non">Non</label>
                                <input type="radio" id="droitsLimites-non" name="droitsLimites" value="false"><br>
                        </div>
                        <div class="form-group">
                            <label for="cp">Image sous copyright</label>&nbsp
                            <input type="checkbox" id="cp" name="cp" value="copyright"><br>
                        </div>
                        <div class="form-group">
                            <label for="datefindroits">Date de fin de droits :</label><br>
                            <input type="date" id="datefindroits" name="dateFinDroits" value=""><br>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags (séparés par une virgule) :</label><br>
                            <input type="text" id="tags" name="tags" value=""><br>
                        </div>
                        <div class="form-group">
                            <label for="image">Déposez votre fichier...</label><br>
                            <input required type="file" name="image" id="image" accept="image/*">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
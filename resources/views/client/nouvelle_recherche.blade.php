@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Mettre en ligne une photo</h1>
            <form method="POST">
                @csrf
                <div>
                    <label for ="nom">Nom :</label><br>
                    <input type ="text" id="nom" name ="nom" value=""><br><br>
                </div>
                <div>
                    <label for ="type">Type de photo :</label><br>
                    <input type ="text" id="type" name ="type" value=""><br><br>
                </div>
                <div class="champ-de-formulaire">
                    <label for="product">Le produit est-il sur la photo ?</label><br>
                    <label for="produit-oui">Oui</label>&nbsp
                    <input type ="radio" id="oui" name="product" value="true"><br>
                    <label for="non">Non</label>
                    <input type ="radio" id="non" name="product" value="false" required><br>
                </div>
                <div>

                </div>
                <p for="product">Une personne est-elle présente sur la photo ?</p><br>
                <label for="oui">Oui</label>&nbsp
                <input type ="radio" id="oui" name="humain" value="true"><br>
                <label for="non">Non</label>
                <input type ="radio" id="non" name="humain" value="false"><br>
                <label for="product">Cette photo a-t-elle été prise dans un but institutionnel?</label><br>
                <label for="oui">Oui</label>&nbsp
                <input type ="radio" id="oui" name="institutionnelle" value="true"><br>
                <label for="non">Non</label>
                <input type ="radio" id="non" name="institutionelle" value="false"><br>
                <label for ="credits">Détenteur de la photo :</label><br>
                <input type ="text" id="credits" name ="credits" value=""><br><br>
                <label for="product">Les droits d'utilisation de cette photo sont ils limités ?</label><br>
                <label for="oui">Oui</label>&nbsp
                <input type ="radio" id="oui" name="droitsLimites" value="true"><br>
                <label for="non">Non</label>
                <input type ="radio" id="non" name="droitsLimites" value="false"><br>
                <label for="cp">Image sous copyright</label>&nbsp
                <input type ="checkbox" id="cp" name="cp" value="copyright"><br>
                <label for ="datefindroits">Date de fin de droits (JJ/MM/YYYY) :</label><br>
                <input type ="date" id="datefindroits" name ="datefindroits" value=""><br><br>
                <label for ="tags">Tags :</label><br>
                <input type ="text" id="tags" name ="tags" value=""><br><br>
                <input type ="submit">
            </form>
        </div>
    </div>
</div>
@endsection

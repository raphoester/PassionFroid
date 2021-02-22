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
                    <p for="produit">Le produit est-il sur la photo ?</label><br><br>
                    <label for="produit-oui">Oui</label>&nbsp
                    <input type ="radio" id="produit-oui" name="produit" value="true"><br>
                    <label for="produit-non">Non</label>
                    <input type ="radio" id="produit-non" name="produit" value="false" required><br>
                </div>
                <div>
                    <p for="humain">Une personne est-elle présente sur la photo ?</p>
                    <label for="huamin-oui">Oui</label>&nbsp
                    <input type ="radio" id="humain-oui" name="humain" value="true"><br>
                    <label for="humain-non">Non</label>
                    <input type ="radio" id="humain-non" name="humain" value="false"><br><br>
                </div>
                <div>
                    <p for="institutionelle">Cette photo a-t-elle été prise dans un but institutionnel?</label><br><br>
                    <label for="institutionelle-oui">Oui</label>&nbsp
                    <input type ="radio" id="institutionelle-oui" name="institutionnelle" value="true"><br>
                    <label for="institutionelle-non">Non</label>   
                    <input type ="radio" id="institutionelle-non" name="institutionelle" value="false"><br>
                </div>
                <div>
                    <label for ="credits">Détenteur de la photo :</label><br>
                    <input type ="text" id="credits" name ="credits" value=""><br><br>
                </div>
                <div>
                    <p for="droits">Les droits d'utilisation de cette photo sont ils limités ?</label><br><br>
                    <label for="droitsLimites-oui">Oui</label>&nbsp
                    <input type ="radio" id="droitsLimite-oui" name="droitsLimites" value="true"><br>
                    <label for="droitsLimites-non">Non</label>
                    <input type ="radio" id="droitsLimites-non" name="droitsLimites" value="false"><br>
                </div>
                <div>    
                    <label for="cp">Image sous copyright</label>&nbsp
                    <input type ="checkbox" id="cp" name="cp" value="copyright"><br>
                </div>
                <div>    
                    <label for ="datefindroits">Date de fin de droits :</label><br>
                    <input type ="date" id="datefindroits" name ="datefindroits" value=""><br><br>
                </div>
                <div>
                    <label for ="tags">Tags :</label><br>
                    <input type ="text" id="tags" name ="tags" value=""><br><br>
                </div>
                <input type ="submit">

            </form>
        </div>
    </div>
</div>
@endsection

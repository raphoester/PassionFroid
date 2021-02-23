@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Modifier une photo existante</h1>
            <form method="POST">
                @csrf
                <div>
                    <label for ="nom">Nom :</label><br>
                    <input type ="text" id="nom" name ="nom" value="{{$image->nom}}"><br><br>
                </div>
                <div>
                    <label for ="type">Type de photo :</label><br>
                    <input type ="text" id="type" name ="type" value="{{$image->type}}"><br><br>
                </div>
                <div class="champ-de-formulaire">
                    <p>Le produit est-il sur la photo ?</p>
                    @php
                        if($image->produit == true)
                        {
                            echo'
                            <label for="produit-oui">Oui</label>&nbsp
                            <input type ="radio" id="produit-oui" name="produit" value="true" checked><br>
                            <label for="produit-non">Non</label>
                            <input type ="radio" id="produit-non" name="produit" value="false" ><br>';
                        }
                        else{
                            echo'
                            <label for="produit-oui">Oui</label>&nbsp
                            <input type ="radio" id="produit-oui" name="produit" value="true"  ><br>
                            <label for="produit-non">Non</label>
                            <input type ="radio" id="produit-non" name="produit" value="false" checked ><br>';
                        }
                    @endphp
                    
                </div>
                <div>
                    <p>Une personne est-elle présente sur la photo ?</p>
                    @php
                        if($image->humain == true)
                        {
                            echo'
                            <label for="humain-oui">Oui</label>&nbsp
                            <input type ="radio" id="humain-oui" name="humain" value="true"  checked><br>
                            <label for="humain-non">Non</label>
                            <input type ="radio" id="humain-non" name="humain" value="false" ><br><br>';
                        }
                        else{
                            echo'
                            <label for="huamin-oui">Oui</label>&nbsp
                            <input type ="radio" id="humain-oui" name="humain" value="true" ><br>
                            <label for="humain-non">Non</label>
                            <input type ="radio" id="humain-non" name="humain" value="false"  checked><br><br>';
                        }
                    @endphp
                </div>
                <div>
                    <p>Cette photo a-t-elle été prise dans un but institutionnel ?</p>
                    @php
                        if($image->institutionnelle == true)
                        {
                            echo'
                            <label for="institutionelle-oui">Oui</label>&nbsp
                            <input type ="radio" id="institutionelle-oui" name="institutionnelle" value="true"  checked><br>
                            <label for="institutionelle-non">Non</label>   
                            <input type ="radio" id="institutionelle-non" name="institutionelle" value="false" ><br>';
                        }
                        else{
                            echo'
                            <label for="institutionelle-oui">Oui</label>&nbsp
                            <input type ="radio" id="institutionelle-oui" name="institutionnelle" value="true" ><br>
                            <label for="institutionelle-non">Non</label>   
                            <input type ="radio" id="institutionelle-non" name="institutionelle" value="false" checked><br>';
                        }
                    @endphp
                </div>
                <div>
                    <label for ="credits">Détenteur de la photo :</label><br>
                    <input type ="text" id="credits" name ="credits" value="{{$image->credits}}"><br><br>
                </div>
                <div>
                    <p>Les droits d'utilisation de cette photo sont ils limités ?</p>
                    @php
                        if($image->institutionnelle == true)
                        {
                            echo '<label for="droitsLimites-oui">Oui</label>&nbsp
                            <input type ="radio" id="droitsLimite-oui" name="droitsLimites" value="true"  checked><br>
                            <label for="droitsLimites-non">Non</label>
                            <input type ="radio" id="droitsLimites-non" name="droitsLimites" value="false"  ><br>';
                        }
                        else{
                            echo'
                            <label for="droitsLimites-oui">Oui</label>&nbsp
                            <input type ="radio" id="droitsLimite-oui" name="droitsLimites" value="true" ><br>
                            <label for="droitsLimites-non">Non</label>
                            <input type ="radio" id="droitsLimites-non" name="droitsLimites" value="false"  checked><br>';
                        }
                    @endphp
                </div>
                
                <div>    
                    <label for="cp">Image sous copyright</label>&nbsp
                    @php
                        if($image->cp == true)
                        {
                            echo'<input type ="checkbox" id="cp" name="cp" value="copyright" checked><br>';
                        }
                        else{
                            echo'<input type ="checkbox" id="cp" name="cp" value="copyright"><br>';
                        }
                    @endphp
                </div>
                <div>    
                    <label for ="datefindroits">Date de fin de droits :</label><br>
                    <input type ="date" id="datefindroits" name ="dateFinDroits" value="{{$image->dateFinDroits}}"><br><br>
                </div>
                <div>
                    <label for ="tags">Tags (séparés par une virgule) :</label><br>
                    <input type ="text" id="tags" name ="tags" value="{{$image->tags}}">
                </div>
                <br>
                <div>
                    <input type ="submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class rechercheController extends Controller
{
    function pageRecherche(){
        return view('client.nouvelle_recherche');
    }

    function montrerImage($image){
        $image = \App\Models\Image::findOrFail($image);
        return view ('images.montrer_image')->with('image', $image);
    }
    
    function resultatsRecherche(Request $requete){
        // dd($requete);
        $resultats = DB::table('images');
        if($requete->has("nom") && $requete->nom != null)
        {
            $resultats->where('nom', "=", $requete->nom);
        }

        if($requete->has("type") && $requete->type != null)
        {
            $resultats->where('type', "=", $requete->type);
        } 

        if($requete->has("produit") && $requete->produit == 'true')
        {
            $resultats->where('produit', "=", 'true');
        }

        if($requete->has("humain") && $requete->humain != 'true')
        {
            $resultats->where('humain', "=", 'true');
        }

        if($requete->has("institutionnelle") && $requete->institutionnelle != 'true')
        {
            $resultats->where('institutionnelle', "=", 'true');
        }

        if($requete->has("credits") && $requete->credits != null)
        {
            $resultats->where('credits', "=", $requete->credits);
        } 

        //si rien n'est coché : pas de restriction
        if((!$requete->has("horizontal") && $requete->horizontal != 'true') && (!$requete->has("vertical") && $requete->vertical != 'true')){}

        //si tout est coché : pas de restriction non plus 
        else if (($requete->has("horizontal") && $requete->horizontal == 'true') && ($requete->has("vertical") && $requete->vertical == 'true')){}

        //si on veut une image horizontale
        else if ($requete->has("horizontal") && $requete->horizontal == 'true')
        {
            $resultats->where('largeur', ">=", "hauteur");
        } 

        //si on veut une image verticale 
        else if ($requete->has("vertical") && $requete->vertical == 'true')
        {
            $resultats->where('largeur', "<=", "hauteur");
        } 

        if($requete->has("tags") && $requete->tags != null)
        {
            foreach(explode(",", $requete->tags) as $tag){
                $resultats->where('tags', "LIKE", "%".$tag."%");  
            }
        }

        $resultats->select('images.*');
        $resultats = $resultats->get();
        return view("client.resultat_recherche")->with('resultats', $resultats);
    }
}

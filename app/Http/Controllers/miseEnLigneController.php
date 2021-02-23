<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class miseEnLigneController extends Controller
{
    function form_mise_en_ligne_img(){
        return view('admin.nvPhoto');
    }

    function form_mise_en_ligne_dossier(){
        return view('admin.nvDossier');
    }

    function telech_dossier(Request $requete){

        $this->validate($requete, [
            'images' => 'required'
        ]);

        if($requete->hasfile('images'))
        {
            foreach($requete->file('images') as $image){
                $this->telech_photo_simple($image);
            }

            flash('Vos photos ont bien été mises en ligne. Merci.');
            return view('tableauDeBord');
        }
        else{
            flash('Erreur lors de la mise en ligne : aucune image reçue.');
            return view('tableauDeBord');
        }
    }

    function telech_photo_simple($image){
        $donnees=[];
        $donnees['url'] = cloudinary()->upload($image->getRealPath())->getSecurePath();
        $data = getimagesize($image);
        $donnees['largeur'] = strval($data[0]);
        $donnees['hauteur'] = strval($data[1]);

        \App\Models\Image::create([
            'url' => $donnees['url'],
            'largeur' => $donnees['largeur'],
            'hauteur' => $donnees['hauteur'],
        ]);
    }

    function telech_photo(Request $requete){
        $url_image = cloudinary()->upload($requete->file('image')->getRealPath())->getSecurePath();
        $data = getimagesize($requete->file('image'));
        $requete['largeur'] = strval($data[0]);
        $requete['hauteur'] = strval($data[1]);

        \App\Models\Image::create([
            'url' => $url_image,
            'nom' => $requete['nom'],
            'type' => $requete['type'],
            'produit' => $requete['produit'],
            'humain' => $requete['humain'],
            'institutionnelle' => $requete['institutionnelle'],
            'hauteur' => $requete['hauteur'],
            'largeur' => $requete['largeur'],
            'credits' => $requete['credits'],   
            'droitsLimites' => $requete['droitsLimites'],
            'dateFinDroits' => $requete['dateFinDroits'],
            'tags' => $requete['tags'],
        ]);
        flash('Votre photo a bien été mise en ligne. Merci.');
        return view('tableauDeBord');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class miseEnLigneController extends Controller
{
    function form_mise_en_ligne(){
        return view('admin.nvPhoto');
    }

    function telech_photo(Request $requete){
        $url_image = cloudinary()->upload($requete->file('image')->getRealPath())->getSecurePath();
        $data = getimagesize($requete->file('image'));
        $requete['largeur'] = strval($data[0]);
        $requete['hauteur'] = strval($data[1]);
        // dd($requete);

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

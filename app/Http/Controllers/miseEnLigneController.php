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
        \App\Models\Image::create([
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
    }
}

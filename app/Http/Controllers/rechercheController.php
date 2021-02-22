<?php

namespace App\Http\Controllers;

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

    function resultatsRecherche(){
        // dd($donnees);
        return view("client.resultat_recherche");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EditionImageController extends Controller
{
    function form_edit_image($image){
        $image = \App\Models\Image::findOrFail($image);
        return view('admin.editImage')->with("image", $image);
    }

    function maj_image($image, Request $requete){
        DB::table('images')
        ->where('id', $image)
        ->update(
            [
                'nom' => $requete['nom'],
                'type' => $requete['type'],
                'produit' => $requete['produit'],
                'humain' => $requete['humain'],
                'institutionnelle' => $requete['institutionnelle'],
                'credits' => $requete['credits'],   
                'droitsLimites' => $requete['droitsLimites'],
                'dateFinDroits' => $requete['dateFinDroits'],
                'tags' => $requete['tags'],
            ]
        );
        flash('Les informations de l\'image ont bien été mises à jour.');
        return redirect("/i/".$image);
    }

    function supprImage($id){
        
        if(\App\Models\Image::where('id',$id)->delete())
        {
            flash("L'image a bien été supprimée.");
        }
        else{
            flash("L'image n'a pas pu être supprimée.");
        }
        return redirect('/');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rechercheController extends Controller
{
    function pageRecherche(){
        return view('client.nouvelle_recherche');
    }
}

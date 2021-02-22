<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miseEnLigneController extends Controller
{
    function form_mise_en_ligne(){
        return view('admin.nvPhoto');
    }
}

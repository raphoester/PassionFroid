<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { //fonction login
    if(auth()->user() == null){
        return view('auth.login');
    }
    else{
        return view('tableauDeBord');
    }
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/r', [App\Http\Controllers\rechercheController::class, 'pageRecherche']);
    Route::get('/i/{id_image}', [App\Http\Controllers\rechercheController::class, 'montrerImage']);
});

Route::group(['middleware' => 'admin'], function(){
    Route::get('/nv', [App\Http\Controllers\miseEnLigneController::class, 'form_mise_en_ligne']);
    Route::post('/nv', [App\Http\Controllers\miseEnLigneController::class, 'telech_photo']);
});



Auth::routes();

Auth::routes();


<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/ensg/add','EnseignantController@store');
Route::post('/etudiant/add','EtudiantController@store');
Route::post('/note','NoteController@store');
Route::post('/notes','NotesController@index');
Route::namespace('Admin')->group(function(){
    Route::get('/admin/login','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login','Auth\LoginController@login');
    Route::get('/admin/home','AdminController@index')->name('admin.home');
    //sauvegarder les données d'un etudiant dans la BDD
    Route::post('/SauvEtud','CreeretudController@store');
    //Formulaire d'ajout d'un etudiant
    Route::get('/ajouteretud','CreeretudController@index')->name('etud');
    //sauvegarder les données d'un etudiant dans la BDD
    Route::post('/Sauvprof','CreerprofController@store');
    //Formulaire d'ajout d'un etudiant
    Route::get('/ajouterprof','CreerprofController@index')->name('etud');

    
    }
);
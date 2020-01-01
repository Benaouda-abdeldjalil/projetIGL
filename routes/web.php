<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () { return view('Index'); });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('note','NoteController')->middleware('utilisateur');
Route::resource('notes','NotesController')->middleware('utilisateur');
/*Admin auth routes*/
//Route::get('/admin/login','Auth\LoginController@showLoginForm')->name('admin.login');

/*----------------------------------------------*/
     // Le boutton du Deconnexion
     Route::get('/deconnexion','DecController@dec')->name('deconnexion');

     /*----------------------------------------------*/






/*--------------------------------------------------*/

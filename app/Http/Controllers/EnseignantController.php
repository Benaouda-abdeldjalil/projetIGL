<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enseignant;
use App\User;
class EnseignantController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::insert([
            'name'=>$request['name'],
            'prenom'=>$request['prenom'],
            'email'=>$request['email'],
            'date_naissance'=>$request['date_naissance'],
            'lieu_naissance'=>$request['lieu_naissance'],
            'password'=>sha1($request['num_inscr']),
            'num_inscr'=>$request['num_inscr'],
            'prof'=>'0',
            'surname'=>'sdds'
        ]);
        $iduser=User::all()->last()->id;
        Enseignant::insert([
            'users_id'=>$iduser,
            'grade'=>$request['grade'],
            'date_rec'=>$request['date_rec'],
        ]);
        return response([
            'status'=>'success',
            'data'=>"l'etudiant et bien inscrir"
        ]);

       /* dd($name,$lastname,$UID,$degree);*/

    }

}

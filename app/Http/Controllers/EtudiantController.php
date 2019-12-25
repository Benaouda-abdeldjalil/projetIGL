<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use App\User;

class EtudiantController extends Controller
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
            'prof'=>'1',
            'surname'=>'sdds'
        ]);
        $iduser=User::all()->last()->id;
        Etudiant::insert([
            'users_id'=>$iduser,
            'année'=>$request['année'],
            'groupe'=>$request['groupe'],
        ]);
        return response([
            'status'=>'success',
            'data'=>"l'etudiant et bien inscrir"
        ]);

       /* dd($name,$lastname,$UID,$degree);*/

    }

    
}

<?php

namespace App\Http\Controllers\Admin;
use Auth;
use Session;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
class CreerprofController extends Controller{
    public function index()
    {
       return view ('Creerprof');
    }



    public function store (Request $request)
    {
       
        $prenom=$request->input('surname');
        $email=$request->input('email');
        $nom=$request->input('name');
        $pass=$request->input('password');
        $date=$request->input('date');
        $lieu=$request->input('lieu');
        $spec=$request->input('spec');//specialite//niveau
        Session::put('pwdNonHash',$pass);

        $user = new User();
        $user->prof='0';
        $user->name=$nom;
        $user->surname=$prenom;
        $user->email=$email;
        $user->password= Hash::make($pass);
        $user->save();

        $id=$user->id;
       //echo ($id);
        DB::table('enseignant')->insert(
            array(
            'ID'=>$id,
            'spec'=>$spec,
            'date'=>$date,
            'lieu'=>$lieu,
            
            )
        );
       // $img=DB::table('etudiant')->whereid($id)->select('URLimg')->value('URLimg');
       // Session::put('image',$img);

        return redirect('/admin/home')->with('succes','enseignant ajouté');
    }

}
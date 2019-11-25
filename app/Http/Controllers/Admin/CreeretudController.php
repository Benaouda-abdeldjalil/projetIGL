<?php

namespace App\Http\Controllers\Admin;
use Auth;
use Session;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
class CreeretudController extends Controller{
    
    public function index()
    {
       return view ('CreerEtudiant');
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
        $groupe=$request->input('groupe');
        Session::put('pwdNonHash',$pass);

        $user = new User();
        $user->prof='1';
        $user->name=$nom;
        $user->surname=$prenom;
        $user->email=$email;
        $user->password= Hash::make($pass);
        $user->save();

        $id=$user->id;
       //echo ($id);
        DB::table('etudiant')->insert(
            array(
            'ID'=>$id,
            'ANNEEetude'=>$spec,
            'date'=>$date,
            'lieu'=>$lieu,
            'groupe'=>$groupe,
            )
        );
       // $img=DB::table('etudiant')->whereid($id)->select('URLimg')->value('URLimg');
       // Session::put('image',$img);

        return redirect('/admin/home')->with('succes','etudiant ajouté');
    }


}


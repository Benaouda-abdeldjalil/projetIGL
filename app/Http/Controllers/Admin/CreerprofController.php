<?php

namespace App\Http\Controllers\Admin;
use Auth;
use Session;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
/**
 * @OA\Info(title="DOCUMENTATION", version="0.1")
 */
class CreerprofController extends Controller{
/**
 * 
 * @OA\Get(
 *  path="/ajouterprof",
 *    summary="index()",
 *     @OA\Response(response="200", description=" Afficher  le formulaire d'ajout d'un enseignant."),
 *
 * )
 */
    public function index()
    {
        return view ('Creerprof');
    
    }

 /**
 * @OA\Post(
 *      path="/Sauvprof",
 *  summary="store(Request $request)",
 *     description="  Récupere les données depuis le formulaire et les insérer dans la base de données.",
 * 
 * @OA\Parameter(
 *         name="request",
 *         in="query",
 *         description="le  formulaire qui a été envoyé",
 *        
 *     ),
 * @OA\Response(
 *         response=200,
 *         description="OK",
 *     ),
 * )
 */

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

       // return redirect('/admin/home')->with('succes','enseignant ajouté');
       return response()->json(null,201);//pour retourner vers la page du adminet dise que la creation etait faite avec succe 
    
    }

}
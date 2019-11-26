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
  /**
 * @OA\Get(
 *  path="/ajouteretud",
 *      summary="index()",
 *     @OA\Response(response="200", description=" Afficher  le formulaire d'ajout d'un  étudiant."),
 *
 * )
 */
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view ('CreerEtudiant');
       
    }

 /**
 * @OA\Post(
 *      path="/SauvEtud",
 *     summary="store(Request $request)",
 *     description="  Récupere les données depuis le formulaire et les insérer dans la base de données.",
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
      

        //return redirect('/admin/home')->with('succes','etudiant ajouté');
       // return response()->json(null,201);//pour retourner vers la page du adminet dise que la creation etait faite avec succe 
    
    }


}


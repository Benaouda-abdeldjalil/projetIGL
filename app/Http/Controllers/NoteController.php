<?php

namespace App\Http\Controllers;

use Image;
use App\Note;
use Illuminate\Http\Request;
use app\app\Http\Rquests;

class NoteController extends Controller
{ 
     /**
 * @OA\Get(
 *  path="/ajoutNote",
 *      summary="index()",
 *     @OA\Response(response="200", description=" Afficher  le formulaire d'ajout d'une note ."),
 *
 * )
 */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ajouteNote');
    }
  /**
 * @OA\Get(
 *  path="/create",
 *      summary="create()",
 *     @OA\Response(response="200", description=" Afficher  le formulaire d'ajout d'une note."),
 *
 * )
 */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajouteNote');

    }
/**
 * @OA\Post(
 *      path="/sauvNote",
 *  summary="store(Request $request)",
 *     description="  Récupere les données depuis le formulaire  d'ajout d'une note et les insérer dans la base de données.",
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Note;
        $this->validate($request,[
            'niveau'=>'required',
            'groupe'=>'required',

        ]);
        $niveaux = array('1cp','2cp','1cs','2cs');
$groupes = array('1','2','','4','5','6','7','8','9');
        $post->niveau=$request->input('niveau');
        $post->groupe=$request->input('groupe');
        $post->prof_id =1;// Auth::user()->id;
        //le fichier
        if($request->hasFile('fichier')){
        $fichier = $request->file('fichier');
        $nom_fichier = time().'.'.$fichier->getClientOriginalExtension();
        Image::make($fichier)->save(public_path('uploads/notes'. $nom_fichier));
        $post->fichier= $nom_fichier;}
        $post->save();
        $notes = Note::all();
        return view('notes')->with('notes',$notes);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //
    }
}

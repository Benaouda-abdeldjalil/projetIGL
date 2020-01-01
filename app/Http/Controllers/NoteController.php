<?php

namespace App\Http\Controllers;

use Image;
use App\Note;
use Illuminate\Http\Request;
use app\app\Http\Rquests;
use Illuminate\Support\Facades\Storage;
use Importer;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  //$notes = Note::all();
        //return view('note')->withe('notes',$notes);
        return view('ajouteNote');
    }

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
           // 'fichier'=> 'required|max:5000|mimes:xlsx,xls,csv',

        ]);
        $niveaux = array('1cp','2cp','1cs','2cs');
$groupes = array('1','2','3','4','5','6','7','8','9');
        $post->niveau=$request->input('niveau');
        $post->groupe=$request->input('groupe');
        $post->prof_id =1;// Auth::user()->id;
        //le fichier
        if($request->hasFile('fichier')){
        $fichier = $request->file('fichier');
        $nom_fichier = time().'.'.$fichier->getClientOriginalExtension();
        Image::make($fichier)->save(public_path('upload/'. $nom_fichier));
         $post->fichier= $nom_fichier;
       // $savePath = public_path('/upload/');
       // $fichier->storeAs('public',$nom_fichier);

        //$fichier->move($savePath,$nom_fichier);
      /*  $excel = Importer::make('Excel');
        /*    $excel->load($savePath.$nom_fichier);
            $collection = $excel->getCollection();
          /*  for($row=1 ; $row<sizeof($collection);$row++)
            {try{var_dump($collection[$show]);}
            catch(\Exception $e){return redirect()->back();} }*/
        }
        $post->save();
        $notes = Note::all();
        return view('notes')->with('notes',$notes)->with('nom',$nom_fichier);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
     //   return Storage::download(public_path('upload/'),$note->nom_fichier) ;
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

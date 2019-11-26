<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NotesController extends Controller
{/**
 * @OA\Get(
 *  path="/afficherNote",
 *      summary="index()",
 *     @OA\Response(response="200", description=" Afficher  toutes les notes."),
 *
 * )
 */
     /**
      * cette fonction sert à afficher toutes les notes  
      *
      * @return void
      */
     public function index()
    {
        $notes = Note::all();
        return view('notes')->with('note',$notes);
    }

}

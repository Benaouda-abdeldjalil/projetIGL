<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Illuminate\Support\Facades\Storage;

class NotesController extends Controller
{
     public function index()
    {
        $notes = Note::all();
        return view('notes')->with('notes',$notes);
    }public function downloadExcel($type)
	{
		$data = Item::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
    public function getDownload(){
        //PDF file is stored under project/public/download/info.pdf
        $file="./download/info.pdf";
        return Response::download($file);

    }
    public function show(Note $note)
    {
    //    return Storage::download(asset('storage/public/'.$note->fichier));//download(public_path('upload/'),$note->fichier) ;
  //     return Storage::allFiles('public');

  return view('image')->with('note',$note);
}
}

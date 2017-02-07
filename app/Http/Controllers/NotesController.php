<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function create(Request $request, Card $card){

    	$note = new Note;
    	$note->body=$request['body'];
    	$note->user_id=1;
    	$note->card_id=$card->id;
    	$this->validate($request, [
    		'body'=>'required'
    	]);
    	$note->save();
    	return back();
    }

    public function edit(Note $note){
    	return view('cards.notes.edit', compact('note'));
    }

    public function update(Note $note, Request $request){
    	$this->validate($request, [
    		'body'=>'required',
    		'email' => 'email|unique:users'
    	]);
    	$note->update(['body'=>$request['body']]);
    	return redirect('/cards/'.$note->card_id);
    }

    public function delete(Note $note){
    	$note->delete();
    	return back();
    }
}

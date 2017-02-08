<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;

use App\Http\Controllers\Controller;
use Validator;

class NotesController extends Controller
{
    public function create(Request $request, Card $card){

    	$note = new Note;
    	$note->body=$request['body'];
    	$note->user_id=1;
    	$note->card_id=$card->id;
    	$validator = Validator::make($request->all(), [
            'body'=>'required'
        ]);

        if ($validator->fails()) {
            flash('The note must have text!', 'error');
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
    	$note->save();
        flash('Note created!', 'success');
    	return back();
    }

    public function edit(Note $note){
    	return view('cards.notes.edit', compact('note'));
    }

    public function update(Note $note, Request $request){

        $validator = Validator::make($request->all(), [
            'body'=>'required'
        ]);

        if ($validator->fails()) {
            flash('The note must have text!', 'error');
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

    	$note->update(['body'=>$request['body']]);
    	flash('Note updated!', 'info');
    	return redirect('/cards/'.$note->card_id);
    }

    public function delete(Note $note){
    	$note->delete();
        flash('Note deleted!', 'info');
    	return back();
    }
}

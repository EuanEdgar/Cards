@extends('cards.layout')

@section('title')
Edit note
@stop

@section('content')
	<h1>Edit the note</h1>

	<form method="POST" action="/notes/{{ $note->id }}">
			{{ method_field('PATCH')}}
			<div class="form-group">
				<textarea name="body" class="form-control custom">{{ $note->body }}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update Note</button>
				<a class="btn btn-default" href="{{ URL::previous() }}" roll="button">Cancel</a>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
@stop
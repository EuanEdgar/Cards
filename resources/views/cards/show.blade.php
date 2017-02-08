@extends('cards.layout')

@section('title')
{{$card->title}}
@stop

@section('content')
<div class="row">
	<div class="coll-md-6 coll-md-offset-3">
		<h1>{{$card->title}}</h1>
		<ul class="list-group">
			@foreach($card->notes as $note)
				<li class="list-group-item custom">
				{{$note->body}}&nbsp;
				<div class="right">
					<div class="icon edit"><a href="/notes/{{$note->id}}/edit">&nbsp;&#9998;&nbsp;</a></div>
					<div class="icon delete"><a href="/notes/{{$note->id}}/delete">&nbsp;X&nbsp;</a></div>
				</div>
				</li>
			@endforeach
		</ul>

		<hr>

		<h3>Add a New Note</h3>
	
		<form method="POST" action="/cards/{{ $card->id }}/notes">
			<div class="form-group">
				<textarea name="body" class="form-control custom"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Note</button>
			</div>
			{{csrf_field()}}
		</form>
	</div>
</div>
@stop

@section('js')
@stop
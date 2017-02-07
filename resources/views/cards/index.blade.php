@extends('layout')

@section('title')
Cards
@stop

@section('content')
	<h1>All cards</h1>
	@foreach($cards as $card)
		<a href="cards/{{$card->id}}">{{ $card->title }}</a>
	@endforeach
@stop
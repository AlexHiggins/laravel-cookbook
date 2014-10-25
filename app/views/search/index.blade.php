@extends('layout.default')

@section('search')
	@include('partials.search')
@stop

@section('content')

<div class="container">

	@if($query != '')
		@section('title', $title)
		@include('recipe.partials.grid')
	@else
		@section('title', 'Please provide a search term')
	@endif

</div>

@stop
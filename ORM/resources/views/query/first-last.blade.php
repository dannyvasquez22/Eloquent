@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">Lista de usuarios FIRST - LAST</h1>
	<h3>Primer registro:</h3>
	<p>ID {{ $first->id }}</p>
	<p>{{ $first->name }}</p>

	<h3>Ultimo registro:</h3>
	<p>ID {{ $last->id }}</p>
	<p>{{ $last->name }}</p>
</div>
@stop
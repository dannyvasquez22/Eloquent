@extends('layout')

@section('content')
<div class="container">
	<h1 class="page-header">Paginate</h1>
	<p>
		{{ $users->total() }} Registros - 
		{{ $users->currentPage() }} de {{ $users->lastPage() }} Páginas - 
		{{ $users->perPage() }} Filas
	</p>
	{{-- Cantidad de páginas: $results->count()
	Página actual: $results->currentPage()
	¿Tiene más páginas?: $results->hasMorePages()
	Última página: $results->lastPage()
	URL de la página siguiente: $results->nextPageUrl()
	Registros por página: $results->perPage()
	URL de la página anterior: $results->previousPageUrl()
	Total de registros: $results->total() 
	URL de una página en específico: $results->url($page) --}}
	<table class="table table-hover table-striped">
		@include('partials.head-users')
		<tbody>
			@include('partials.list-users')
		</tbody>
	</table>
	{!! $users->render() !!}
</div>
@stop
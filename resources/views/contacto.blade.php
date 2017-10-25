@extends('master')
@section('buscador','nosotros')

@section('hola')

	<h1>Contactanos</h1>
	<p>texto</p>

	<p> mis datos son {{$nombreapellido}} y trabajo en el laboratorio de {{$curso}}</p>

	@if($curso=='sd')
		<p>si es el curso</p>
	@else
		<p>no es el curso</p>
	@endif

	@for ($i=0; $i < 10;$i++)

		<p> la variable es {{$i}}<br /></p>

	@endfor

@endsection

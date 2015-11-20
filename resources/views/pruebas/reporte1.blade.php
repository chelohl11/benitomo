@extends('layouts/master/template')

@section('contenido')
	Esto esta muy bueno... gracias por su visita {{$nombre}}.

    @if($nombre!='')
        {{$nombre}}
    @else
         No existe
    @endif

@endsection
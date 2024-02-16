@extends('plantilla')
@section('titulo', 'Lista de Peliculas')
@section('contenido')
<h1>Listado de peliculas</h1>

<table class="table table-striped">
    <th>Pelicula</th>

<tr>
    @foreach($peliculas as $pelicula)
    <td>{{ $pelicula->title}}</td>
    </tr>
    @endforeach



</table>


@endsection
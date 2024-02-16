@extends('plantilla')
@section('titulo', 'Dar de alta pelicula')
@section('contenido')
<h1>Dar de alta Pelicula</h1>

<form action="{{ route('peliculas.store') }}" method="POST">
@csrf
<div class="row mb-3">
    <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" name="id" id="id">
        </div>
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="year">Año:</label>
            <input type="text" class="form-control" name="year" id="year">
        </div>

        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" class="form-control" name="director" id="director">
        </div>

        <div class="form-group">
            <label for="poster">Poster:</label>
            <input type="text" class="form-control" name="poster" id="poster">
        </div>

        <div class="form-group">
            <label for="rented">Rented:</label>
            <input type="text" class="form-control" name="rented" id="rented">
        </div>

        <div class="form-group">
            <label for="synopsis">Synopsis:</label>
            <input type="text" class="form-control" name="synopsis" id="synopsis">
        </div>

        <div class="form-group">
            <label for="protagonista">Protagista:</label>
            <input type="text" class="form-control" name="protagonista" id="protagonista">
        </div>


        
       
        <input type="submit" name="enviar" value="Enviar" class="btn btn-dark
btn-block">
    </div>
</form>


@endsection
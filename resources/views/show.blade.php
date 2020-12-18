@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{$pelicula->poster}}" alt=""/>
        </div>
        <div class="col-sm-8">
            <h2>{{$pelicula->title}}</h2>
            <h4>{{$pelicula->director}}</h4>
            <h4>{{$pelicula->year}}</h4>
            <p><strong>Resumen: {{$pelicula->synopsis}}</strong></p>
            <p><strong>Estado: </strong>Pel.lícula @if ($pelicula->rented)  Actualment llogada @else disponible @endif</p>
            <p>
                @if ($pelicula->rented)
                    <a href='' class="btn btn-info">Tornar Pel.lícula</a>
                @else
                    <a href='' class="btn btn-danger">Llogar Pel.lícula</a>
                @endif
                <a href="{{ route('movie.edit',$pelicula->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i>Editar Pel.lícula</a>
                <a href="{{ route('movie.index') }}" class="btn btn-default">Tornar catàleg</a>
            </p>
        </div>
    </div>
@stop

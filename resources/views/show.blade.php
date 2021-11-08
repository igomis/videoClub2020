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
            @if ($pelicula->Genre)
                <p><strong>Genero:</strong>{{$pelicula->Genre->title}}</p>
            @endif
            <p>
                @if ($pelicula->rented)
                    @if (Auth::user()->rent_movies->contains($pelicula))
                        <a href='{{route('return',$pelicula->id)}}' class="btn btn-info">Tornar Pel.lícula</a>
                    @endif
                @else
                    <a href='{{route('rent',$pelicula->id)}}' class="btn btn-danger">Llogar Pel.lícula</a>
                @endif
                @if(auth()->check())
                    <a href="{{ route('movie.pdf',$pelicula->id) }}"class="btn btn-info"><i class="fa fa-pdf-o"></i>Imprimir Caratula</a>
                    <a href="{{ route('movie.edit',$pelicula->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i>Editar Pel.lícula</a>
                    <form action="{{route('movie.destroy',$pelicula->id)}}" method="POST" style="display:inline" class="btn btn-danger">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danguer" style= "display:inline" > Esborrar Película</button>
                    </form>
                @endif
            </p>
        </div>
    </div>
@stop

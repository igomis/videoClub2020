@extends('layouts.master')
@section('content')
    <div><a href="{{route('movie.create')}}" class="btn btn-primary">Crear Pel·licula</a></div>
    <div class="row">
        @foreach( $movies as $pelicula )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href="/movie/{{$pelicula->id}}">
                    <img src="{{$pelicula->poster}}" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$pelicula->title}}
                    </h4>
                </a>
            </div>
        @endforeach
    </div>
    {{  $movies->links() }}
@stop

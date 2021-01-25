@extends('layouts.master')
@section('content')
    <h2 >Gèneres</h2>
    <div class="row">
        <table class="table-bordered table-info">
            <tr><th>id</th><th>Titulo</th><th>Operacion</th></tr>
            @foreach( $generos as $genero )
                <tr>
                    <td>{{$genero->id}}</td>
                    <td>{{$genero->title}}</td>
                    <td><a href='/genre/{{$genero->id}}'><i class='fa fa-edit'></i></a>
                        <form action="{{route('genre.destroy',$genero->id)}}" method="POST" style="display:inline" class="btn btn-danger">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danguer" style= "display:inline" > Esborrar Genero</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop

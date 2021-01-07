@extends('layouts.master')
@section('content')
    <div class="row" style="margin-top:20px">
        <div class="col-md-offset-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Modificar pel.lícula
                    </h3>
                </div>
                <div class="panel-body" style="padding:30px">
                    <form method='POST' action="{{route('movie.update',$pelicula->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{$pelicula->title}}">
                        </div>
                        <div class="form-group">
                            <label for='year'>Any:</label>
                            <input type='number' name='year' value="{{$pelicula->year}}"/>
                        </div>
                        <div class="form-group">
                            <label for='director'>Director:</label>
                            <input type='text' name='director' value="{{$pelicula->director}}"/>
                        </div>
                        <div class="form-group">
                            <label for='poster'>Poster:</label>
                            <input type='url' name='poster' value="{{$pelicula->poster}}" />
                        </div>

                        <div class="form-group">
                            <label for="synopsis">Resumen</label>
                            <textarea name="synopsis" id="synopsis" class="form-control" rows="3">{{$pelicula->synopsis}}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar pel.lícula
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

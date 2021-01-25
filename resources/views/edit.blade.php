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
                    {!! Form::model($pelicula,['url' => "movie/$pelicula->id",'class'=>'form-horizontal form-label-left','enctype'=>"multipart/form-data","method"=>'PUT']) !!}
                    {!! Field::text('title') !!}
                    {!! Field::text('year') !!}
                    {!! Field::text('director') !!}
                    {!! Field::text('poster') !!}
                    {!! Field::select('genre_id',) !!}
                    {!! Field::textarea('synopsis') !!}
                    {!! Form::submit('Enviar',['class'=>'btn btn-success','id'=>'submit']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop

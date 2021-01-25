@extends('layouts.master')
@section('content')
    <div class="row" style="margin-top:20px">
        <div class="col-md-offset-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Modificar Genere
                    </h3>
                </div>
                {!! Form::model($genre,['class'=>'form-horizontal form-label-left','enctype'=>"multipart/form-data",'method'=>'put']) !!}
                {!! Field::text('title') !!}
                {!! Form::submit('Enviar',['class'=>'btn btn-success','id'=>'submit']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
@stop

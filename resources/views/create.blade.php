@extends('layouts.master')
@section('content')
    <div class="row" style="margin-top:20px">
        <div class="col-md-offset-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Afegir pel.lícula
                    </h3>
                </div>
                <div class="panel-body" style="padding:30px">
                    <form method='POST' action="{{route('movie.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                            @if ($errors->has('title'))
                                <div class="text-danger">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for='year'>Any:</label>
                            <input type='number' name='year' value="{{ old('year') }} />
                            @if ($errors->has('year'))
                                <div class="text-danger">
                                    {{ $errors->first('year') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for='director'>Director:</label>
                            <input type='text' name='director' value="{{ old('director') }}/>
                            @if ($errors->has('director'))
                                <div class="text-danger">
                                    {{ $errors->first('director') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for='poster'>Poster:</label>
                            <input type='url' name='poster' />
                        </div>

                        <div class="form-group">
                            <label for="synopsis">Resumen</label>
                            <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Afegir pel.lícula
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

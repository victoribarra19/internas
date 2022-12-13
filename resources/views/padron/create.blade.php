@extends('adminlte::page')

@section('title', 'Añadir Nueva Persons')

@section('content_header')
    <h1>Personas</h1>
@stop

@section('content')
<div class="offset-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Agregar Personas</h3><a href="{{route('personas.index')}}"><button type="button" class="close" >&times;</button></a>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'personas.store']) !!}
                
                @include('personas.partials.form')
            
                
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="pull-left">{!! Form::submit('Crear Persona', ['class'=>'btn btn-primary']) !!}</div>
                    <div class="col"></div>
                    <div class="pull-right"><button type="reset" class="btn btn-danger">Cancelar</button></div>
                  </div>
            </div>
                {!! Form::hidden('from', 1) !!}
                {!! Form::close() !!}
        </div>
    </div>
</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop


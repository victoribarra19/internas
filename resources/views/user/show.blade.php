@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    
@stop

@section('content')
<br>
    <div class="card">
        <div class="card-header">
            <h3>USUARIO</h3><a href="{{route('user.index')}}"><button type="button" class="close" >&times;</button></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h5>{{$user->name.' '.$user->apellido}}</h5><br>
                </div>
                <div class="col">
                    <h5>Dependencia</h5>
                    @if ($dependencia->count())
                        @foreach ($dependencia as $dep)
                            {!! Form::label('dep', $dep->descripcion, ['class'=>'plaintext']) !!}
                        @endforeach
                    @else
                        {!! Form::label('dep', 'Sin dependencia', ['class'=>'plaintext']) !!}
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col"><a class="btn btn-warning" href="{{route('user.edit',$user->id)}}"> <i class="fa fa-edit"></i> Asignar permisos</a></div>
                <div class="col"><a class="btn btn-success" href="{{route('user.show',$user->id)}}" > <i class="fa fa-edit"></i> Asignar dependencia</a></div>
                <div class="col"><a class="btn btn-info" href="{{route('user.verAsignarPersona',$user->id)}}" > <i class="fa fa-edit"></i> Asignar Persona</a></div>
            </div>
            
            
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop

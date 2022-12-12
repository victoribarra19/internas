@extends('adminlte::page')

@section('title', 'Asignar permisos a usuarios')

@section('content_header')
    <h1>ASIGNAR PERMISOS</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="offset-3">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ASIGNAR PERMISOS</h3>
            </div>
            
                <div class="card-body">
                    <p class='h5' >Nombre del usuario</p>
                    <p class="form-control">{{$user->name}} </p>
                    {!! Form::model($user, ['route' => ['user.update',  $user], 'method' => 'put']) !!}
                    <h2 class='h5'>Listado de roles</h2>
                        @foreach ($roles as $role)
                            <div>
                                <label>
                                   {!! Form::checkbox('roles[]',$role->id,null,['class'=>'mr-1']) !!}
                                    {{$role->name}}
                                </label>
                            </div>
                        @endforeach

                        {!!  Form::submit('Asignar rol',['class' => 'btn btn-primary mt-2']) !!}

                    {!! Form::close() !!}
                </div>
                <div class="card-footer">
                    
                    <a  class="btn btn-secondary" href="/user">Cancelar</a>
                </div>
     
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop

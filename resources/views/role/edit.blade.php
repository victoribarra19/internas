@extends('adminlte::page')

@section('title', 'Editar Rol')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
<div class="offset-3">
    <div class="col-md-8">
        <div class="card card-danger">
            @if (session('info'))
                <div class="alert alert-sucess">
                    {{session('info')}}
                </div>
            @endif

            <div class="card-header">
                <h3 class="card-title">AGREGAR ROL DE USUARIOS</h3>
            </div>
            <div class="card-body">
                {!! Form::model($role, ['route' => ['roles.update',$role],'method' => 'put']) !!}
    
                    @include('role.partials.form')
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">{!! Form::submit('Actualizar Roles', ['class'=>'btn btn-success']) !!}</div>
                            <div class="col"></div>
                            <div class="col"><a href="{{route('roles.index')}}"><button type="button" class="btn btn-secondary" >Cancelar</button></a></div>
                        </div> 
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div> 
    </div>  
@stop

@section('css')  
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
>
@stop
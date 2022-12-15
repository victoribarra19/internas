@extends('adminlte::page')

@section('title', 'Crear permisos')

@section('content_header')
    <h1>Permisos</h1>
@stop

@section('content')
<div class="offset-3">
    <div class="col-md-8">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Agregar permiso</h3>
            </div>
            <form action="{{route('permisos.store')}}" method="POST" >
            @CSRF
                <div class="card-body">
                    <label for="nombre">Nombre</label>
                    <input type="nombre" id="nombre" name="nombre" class="form-control"  placeholder="Ingrese el nombre del permiso. Ej.: pais.index" required>
                    <label for="desc">Descripción</label>
                    <input type="text" id="desc" name="desc" class="form-control"  placeholder="Ingrese la descripción del permiso" required>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                    <a  class="btn btn-secondary" href="{{route('permisos.index')}}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop

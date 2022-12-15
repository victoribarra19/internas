@extends('adminlte::page')

@section('title', 'Editar permiso')

@section('content_header')
    <h1>Permisos</h1>
@stop

@section('content')
<div class="offset-3">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar permiso</h3>
            </div>
            <form action="/permisos/{{$Permiso->id}}" method="POST" >
            @CSRF
            @method('PUT')
                <div class="card-body">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control"  placeholder="Ingrese el nombre del permiso" value="{{$Permiso->name}}" required>
                    <label for="desc">Descripción</label>
                    <input type="text" id="desc" name="desc" class="form-control"  placeholder="Ingrese la descripción del permiso" value="{{$Permiso->description}}" required>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a  class="btn btn-secondary" href="/permisos">Cancelar</a>
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

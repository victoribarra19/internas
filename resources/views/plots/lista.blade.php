@extends('adminlte::page')

@section('title', 'Lista')

@section('content_header')
    <h1>Lista</h1>
@stop

@section('content')
<div class="card card-danger">
  <div class="card-header">
    Lista de afiliados
  </div>
  <div class="card-body">
    <table id="tipo_documentos" class="table table-hover table-bordered table-striped">
      <thead class="bg-primary text-white">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
         
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($lista as $elemento_lista)
            <tr>
              <th scope="row">{{$elemento_lista->nombre}}</th>
              <td>{{$elemento_lista->apellido}}</td>
              
                              
            </tr>
            @endforeach
      </tbody>
    </table>
  </div>
</div>    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
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
      <thead class="bg-danger text-white">
        <tr>
          <th scope="col">C.I.</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Mesa</th>
          <th scope="col">Orden</th>
          <th scope="col">Local</th>
         
          
        </tr>
      </thead>
      <tbody>
          @foreach ($lista as $elemento_lista)
            <tr>
              <th scope="row">{{$elemento_lista->numero_ced}}</th>
              <th >{{$elemento_lista->nombre}}</th>
              <td>{{$elemento_lista->apellido}}</td>
              <td>{{$elemento_lista->mesa}}</td>
              <td>{{$elemento_lista->orden}}</td>
              <td>{{$elemento_lista->desc_locanr}}</td>
              
                              
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
<script>
$(document).ready(function() {
      $('#tipo_documentos').DataTable({
        "language": {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
          "infoEmpty": "Mostrando 0 to 0 of 0 registros",
          "infoFiltered": "(Filtrado de _MAX_ total registros)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Registros",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "No se encontraron resultados",
          "paginate": {
              "first": "Primero",
              "last": "Último",
              "next": "Siguiente",
              "previous": "Anterior"
          }
        }
     
      }
      );
      
  } );
</script>
@stop
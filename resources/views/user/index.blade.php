@extends('adminlte::page')

@section('title', 'Lista de usuarios')

@section('content_header')
    <h1>Listado de usuarios</h1>
@stop

@section('content')
<br>   
<div class="card">
  <div class="card-header">
    <center>
      <div class="col-md-6">
      <a href="{{route('user.create')}}" class='btn btn-success btn-block'> <i class="fa fa-user-plus"></i>  AÑADIR NUEVO USUARIO</a>
      </div>
      </center>
  </div>
  <div class="card-body">
    <table id="usuarios" class="table table-hover table-bordered table-striped table-sm">
      <thead class="bg-danger text-white">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">EMAIL</th>
          <th scope="col">FECHA CREACIÓN</th>
          <th scope="col">FECHA MODIFICACIÓN</th>
          <th scope="col"></th>

          <th scope="col"></th>
          
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)
          
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td scope="row">{{$user->name}}</td>
              <td scope="row">{{$user->email}}</td>
              <td scope="row">{{$user->created_at}}</td>
              <td scope="row">{{$user->updated_at}}</td>
              <td scope="row"><a class="btn btn-warning btn-sm" href="user/{{$user->id}}/edit"> <i class="fa fa-edit"></i> Asignar permisos</a></td>
              <form action="#" method="POST" class="formulario-eliminar">
                @CSRF
                @method('DELETE')
                <td scope="row"><button type='submit' class="btn btn-danger" ><i class="far fa-trash-alt"></i> Eliminar</a></td>
              </form>                  
            </tr>
            @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop

@section('css')
    
@stop
@section('js')
  
<script>
  $(document).ready(function() {
      $('#usuarios').DataTable({
        "columnDefs": [ { orderable: false, targets: [-1,-2,-3] }],
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
<script src="js/cdnjsdelivrnetnpmsweetalert2@11.js"></script>

  @if (session("mensajeeliminar")=="ok") {
    <script>
      Swal.fire(
          'Eliminado',
          'El registro ha sido eliminado',
          'info'
        )
    </script>
  @endif
  

<script>
  $('.formulario-eliminar').submit(function(e){
    e.preventDefault();
    Swal.fire({
    title: 'Estás seguro/a?',
    text: "Esta operación no se puede deshacer",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#62130e',
    cancelButtonColor: '#6c757d',
    confirmButtonText: 'Sí',
    cancelButtonText: 'Cancelar'
    }).then((result) => {
    if (result.isConfirmed) {
      this.submit();
    }
  })
  })
 
</script>
@stop

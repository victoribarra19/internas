@extends('adminlte::page')

@section('title', 'Listado de roles')

@section('content_header')
    <h1>LISTADO DE ROLES</h1>
@stop

@section('content')
<center>
  @if (session('info'))
                <div class="alert alert-sucess">
                    {{session('info')}}
                </div>
   @endif
<div class="col-md-6">
<a href="roles/create" class='btn btn-success btn-block'> <i class="fa fa-plus"></i>  CREAR ROL DE USUARIO</a>
</div>
</center>
<br>   
<table id="usuarios" class="table table-hover table-bordered table-striped">
            <thead class="bg-danger text-white">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Rol</th>
 
                <th  ></th>
                <th></th>

              </tr>
            </thead>
            <tbody>
                @foreach ($roles as $rol)
                  <tr>
                    <th scope="row">{{$rol->id}}</th>
                    <td scope="row">{{$rol->name}}</td>

                    <td ><a class="btn btn-warning" href="{{route('roles.edit',$rol) }}"> <i class="fa fa-edit"></i> Editar</a></td>
                    <form action="{{ route('roles.destroy',$rol) }}" method="POST" class="formulario-eliminar">
                      @CSRF
                      @method('DELETE')
                      <td  ><button type='submit' class="btn btn-danger" ><i class="far fa-trash-alt"></i> Eliminar</a></td>
                    </form>                    
                  </tr>
                  @endforeach
            </tbody>
          </table>

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script scr="js/cdndatatablesnet11025jsjquerydataTablesmin.js"></script>
<script>
  $(document).ready(function() {
      $('#usuarios').DataTable({
        "columnDefs": [ { orderable: false, targets: [-1,-2] }],
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

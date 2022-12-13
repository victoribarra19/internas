@extends('adminlte::page')

@section('title', 'Asignar permisos a usuarios')

@section('content_header')
    <h1>Asignar permisos</h1>
@stop

@section('content')


<div class="offset-3">
    <div class="col-md-8">
        <div class="card ">
            <div class="card-header">
                <h2 class="card-title">Asignar permisos</h2><a href="{{route('users.index')}}"><button type="button" class="close" >&times;</button></a>
            </div>
            
                <div class="card-body">
                    {!! Form::label('nombreUser', 'Nombre del usuario', ['class'=>'']) !!}
                    <p class="form-control" id='nombreUser'>{{$user->name}} </p>
                    {!! Form::model($user, ['route' => ['users.update',  $user], 'method' => 'put']) !!}
                    {!! Form::label('roles', 'Listado de roles', ['class'=>'']) !!}
                    
                        @foreach ($roles as $role)
                            <div>
                                <label>
                                   {!! Form::checkbox('roles[]',$role->id,null,['class'=>'mr-1']) !!}
                                    {{$role->name}}
                                </label>
                            </div>
                        @endforeach

                        

                    
                </div>
                <div class="card-footer">
                    {!!  Form::submit('Asignar rol',['class' => 'btn btn-primary mt-2 form-inline']) !!}
                    <button type="reset" class="btn btn-secondary mt-2 form-inline">Cancelar</button>
                    
                </div>{!! Form::close() !!}
     
        </div>
    </div>
</div>
@stop   

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="../../js/cdnjsdelivrnetnpmsweetalert2@11.js"></script> 

  @if (session("info")) {
    <script>
      Swal.fire(
          'Correcto',
          'Se ha(n) asignado correctamente el/los rol(es)',
          'success'
        )
    </script>
  @endif
@stop
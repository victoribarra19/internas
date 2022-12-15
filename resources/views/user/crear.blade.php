@extends('adminlte::page')

@section('title', 'Añadir Nueva Usuario')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
<div class="offset-3">
    <div class="col-md-8">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">AGREGAR USUARIO</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'user.store']) !!}
                @include('user.partials.form')      
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">{!! Form::submit('Crear Usuario', ['class'=>'btn btn-danger']) !!}</div>
                    <div class="col"></div>
                    <div class="col"><button type="reset" class="btn btn-secondary" >Cancelar</button></div>
                  </div>
            </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
     function mostrarContrasena(){
        var current= document.getElementById("show-hide-password").getAttribute('action');
            if(current == 'hide' ){
                 document.getElementById('password').setAttribute('type','text');
                $("#show-hide-password").removeClass('fas fa-eye').addClass('fas fa-eye-slash').attr('action','show');
             }else if(current == 'show'){
                document.getElementById('password').setAttribute('type','password');
               $('#show-hide-password').removeClass('fas fa-eye-slash').addClass('fas fa-eye').attr('action','hide');
             }else{
                 console.log("El action es nulo");
             }
     }
     function mostrarContrasena2(){
        var current= document.getElementById("show-hide-password2").getAttribute('action');
            if(current == 'hide' ){
                 document.getElementById('password_confirmation').setAttribute('type','text');
                $("#show-hide-password2").removeClass('fas fa-eye').addClass('fas fa-eye-slash').attr('action','show');
             }else if(current == 'show'){
                document.getElementById('password_confirmation').setAttribute('type','password');
               $('#show-hide-password2').removeClass('fas fa-eye-slash').addClass('fas fa-eye').attr('action','hide');
             }else{
                 console.log("El action es nulo");
             }
     }
</script>
@stop

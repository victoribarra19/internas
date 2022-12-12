@extends('adminlte::page')

@section('title', 'Actualizar contraseña')

@section('content_header')
    
@stop

@section('content')
<br>   
<div class="offset-3">
    <div class="col-md-8">
        
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Actualizar contraseña</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'reset.store']) !!}
                
                {!! Form::label('antigua','Contraseña actual:') !!}
                <div class="input-group form-group">
                    {!! Form::password('antigua', ['class'=>'form-control','required','placeholder'=>__('adminlte::adminlte.password')]) !!}
                    <div class="input-group-append">
                        <span id='show-hide-password1' action='hide' onclick='mostrarContrasena1();' class='input-group-text fas fa-eye'></span>
                    </div>   
                    @error('antigua')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div> 
                {!! Form::label('password','Nueva contraseña:') !!}
                <div class="input-group form-group">
                    {!! Form::password('password', ['class'=>'form-control','required','placeholder'=>'Ingrese su nueva contraseña']) !!}
                    <div class="input-group-append">
                        <span id='show-hide-password' action='hide' onclick='mostrarContrasena();' class='input-group-text fas fa-eye'></span>
                    </div>   
                    @error('password')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                {!! Form::label('password_confirmation','Confirmar Contraseña:') !!}
                <div class="input-group form-group">
                    {!! Form::password('password_confirmation', ['class'=>'form-control','required','placeholder'=>'Confirme su contraseña']) !!}
                    <div class="input-group-append">
                        <span id='show-hide-password2' action='hide' onclick='mostrarContrasena2();' class='input-group-text fas fa-eye'></span>
                    </div>
                    @error('password_confirmation')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                {!!  Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
                        

                {!! Form::close() !!}
            </div>
        </div>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Atención: </strong> su contraseña debe tener al menos 8 (ocho) caracteres. Una vez se actualice la contraseña se le pedirá volver a iniciar sesión. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </div>
</div>

@stop

@section('css')
    @include('cssyjs.css')
@stop
@section('js')
  @include('cssyjs.js')
  <script>
    function mostrarContrasena1(){
       var current= document.getElementById("show-hide-password1").getAttribute('action');
           if(current == 'hide' ){
                document.getElementById('antigua').setAttribute('type','text');
               $("#show-hide-password1").removeClass('fas fa-eye').addClass('fas fa-eye-slash').attr('action','show');
            }else if(current == 'show'){
               document.getElementById('antigua').setAttribute('type','password');
              $('#show-hide-password1').removeClass('fas fa-eye-slash').addClass('fas fa-eye').attr('action','hide');
            }else{
                console.log("El action es nulo");
            }
    }
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

<div class="form-group">
    {!! Form::label('name','Nombres y Apellidos:') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre y el apellido del usuario' ,'required','autofocus']) !!}
    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('email','Correo Electronico:') !!}
    {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre y el apellido del usuario' ,'required']) !!}
    @error('email')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
{!! Form::label('password','Contraseña:') !!}
<div class="input-group form-group">
    {!! Form::password('password', ['class'=>'form-control','required','placeholder'=>__('adminlte::adminlte.password')]) !!}
    <div class="input-group-append">
        <span id='show-hide-password' action='hide' onclick='mostrarContrasena();' class='input-group-text fas fa-eye'></span>
    </div>   
    @error('password')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
{!! Form::label('password_confirmation','Confirmar Contraseña:') !!}
<div class="input-group form-group">
    {!! Form::password('password_confirmation', ['class'=>'form-control','required','placeholder'=>__('adminlte::adminlte.retype_password')]) !!}
    <div class="input-group-append">
        <span id='show-hide-password2' action='hide' onclick='mostrarContrasena2();' class='input-group-text fas fa-eye'></span>
    </div>
    @error('password_confirmation')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

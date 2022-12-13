<div class="form-group">    
    {!! Form::label('nombre','Nombres:') !!}
    {!! Form::text('nombre', null, ['class'=>'form-control-plaintext' ,'disabled','focus']) !!}
    {{---{!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la persona' ,'required']) !!}--}}
    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('apellido','Apellidos:') !!}
    {!! Form::text('apellido', null, ['class'=>'form-control-plaintext' ,'disabled']) !!}
    @error('apellido')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('cedula','Cedula:') !!}
    {!! Form::text('cedula', null, ['class'=>'form-control-plaintext' ,'disabled']) !!}
    @error('cedula')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('direccion','Dirección:') !!}
    {!! Form::text('direccion', null, ['class'=>'form-control-plaintext' ,'disabled']) !!}
    @error('direccion')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
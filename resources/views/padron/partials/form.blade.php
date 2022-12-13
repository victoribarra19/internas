
<div class="form-group">    
    {!! Form::label('cedula','CEDULA DE IDENTIDAD:') !!}
    {!! Form::text('cedula', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'cedula']) !!}
    {{---{!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la persona' ,'required']) !!}--}}
    @error('cedula')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">    
    {!! Form::label('nombre','NOMBRES:') !!}
    {!! Form::text('nombre', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'nombre']) !!}
    {{---{!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la persona' ,'required']) !!}--}}
    @error('nombre')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('apellido','APELLIDOS:') !!}
    {!! Form::text('apellido', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'apellido']) !!}
    @error('apellido')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('fecha_nac','FECHA DE NACIMIENTO:') !!}
    {!! Form::text('fecha_nac', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'fecha_nac']) !!}
    @error('fecha_nac')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('departamento','DEPARTAMENTO:') !!}
    {!! Form::text('departamento', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'departamento']) !!}
    @error('departamento')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('distrito','DISTRITO:') !!}
    {!! Form::text('distrito', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'distrito']) !!}
    @error('distrito')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('nroSeccional','NRO. SECCIONAL:') !!}
    {!! Form::text('nroSeccional', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'nroSeccional']) !!}
    @error('nroSeccional')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('seccional','SECCIONAL:') !!}
    {!! Form::text('seccional', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'seccional']) !!}
    @error('seccional')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('local','LOCAL:') !!}
    {!! Form::text('local', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'local']) !!}
    @error('local')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('mesa','MESA:') !!}
    {!! Form::text('mesa', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'mesa']) !!}
    @error('mesa')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('orden','ORDEN:') !!}
    {!! Form::text('orden', null, ['class'=>'form-control-plaintext' ,'disabled','id'=>'orden']) !!}
    @error('orden')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

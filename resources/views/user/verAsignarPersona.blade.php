@extends('adminlte::page')

@section('title', 'Asignar permisos a usuarios')

@section('content_header')
    <br>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="offset-3">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Asignar Persona</h3>
            </div>
            
                <div class="card-body">
                    
                    {!! Form::open(['route' => ['asignarPersona',$user->id],'class'=>'form']) !!}
                    
                    <h2 class='h5'>{{ $user->name.' '.$user->apellido }}</h2>

                        <div class="form-group">
                            {!! Form::label('persona','Persona' ) !!}
                            <select name="persona[]" id="persona" class="js-example-basic-multiple form-control" multiple required>
                                @foreach ($personas as $per)
                                    <option value="{{$per->id}}">{{$per->nombre.' '.$per->apellido}}</option>   
                                @endforeach
                            </select>       
                        </div>
                        
                        {!!  Form::submit('Asignar',['class' => 'btn btn-primary']) !!}
                        

                        {!! Form::close() !!}
                </div>
                <div class="card-footer">
                   <a href="{{route('personas.create')}}" class="btn btn-success">CREAR NUEVA PERSONA</a>
                </div>
     
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
      $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        width: 'resolve';
      });
    </script>
@stop

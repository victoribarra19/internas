@extends('adminlte::page')

@section('title', 'Consultar Padron')

@section('content_header')
<h1>CONSULTAR PADRON</h1>
@stop

@section('content')
<br> 
<div class="offset-3">
  <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-danger">
          <center>
            <div class="col-md-6">
              <div class="input-group mb-6">
              {{-- {!! Form::label('nroCi','Persona:') !!}--}}
                {!! Form::text('nroCi', null, ['class'=>'form-control', 'id'=>'nroCi','placeholder'=>'Ingrese el numero de C.I']) !!} 
                    <div class="input-group-append">
                        <button class="btn btn-warning" id="bpConsultarPadron" onclick="consultarPadron();" type="button" title="CONSULTAR PADRON"><i class="fas fa-search"></i></button>  
                    </div>
                  </div>
                @error('nroCi')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
          </center>
        </div>
        
          <div class="card-body card-danger">
            @include('padron.partials.form') 
          </div>
      
        <div class="card-footer">
          <center>
            <div class="row">
              <div class="col" id="botonCheck">
                <button class="btn btn-success btn-lg" onclick="consultarPadron();" disabled> CHECKEAR</button>
              </div>
              <div class="col">
                <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Limpiar</button>
              </div>
            </div>
          </center>   
        </div>
      </div>
    </div>
</div>

@stop

@section('css')

@stop
@section('js')
<script src="{{asset('js/app.js')}}"></script>
<script>
  function consultarPadron(){
    let nroCi = $('#nroCi').val();
   
    if(nroCi.length==0){
      Swal.fire(
          'EL CAMPO NUMERO DE CEDULA NO DEBE ESTAR VACIO',
          'POR FAVOR INGRESE EL NUMERO DE CEDULA',
          'error'
        )
        $("#nroCi").focus(); 
    }else{
      $.ajax({
        url: "{{route('consultarPadron')}}",
        type:"POST",
        data:{
          "_token": "{{ csrf_token() }}",
          nroCi:nroCi
        },
        success:function(response){
            //console.log(response);
            document.getElementById('botonCheck').innerHTML = "<button class='btn btn-success btn-lg' id='bcheckear' onclick='checkear("+response.cedula+");' type='button' title='CHECKEAR PERSONA'>CHECKEAR</button>";
            document.getElementById('cedula').value=response.cedula;
             document.getElementById("nombre").value=response.nombre; 
            document.getElementById("apellido").value=response.apellido; 
            document.getElementById("fecha_nac").value=response.fecha_nac; 
            document.getElementById("departamento").value=response.departamento; 
            document.getElementById("distrito").value=response.distrito; 
            document.getElementById("nroSeccional").value=response.nroSeccional; 
            document.getElementById("seccional").value=response.seccional; 
            document.getElementById("local").value=response.local; 
            document.getElementById("mesa").value=response.mesa; 
            document.getElementById("orden").value=response.orden;
            document.getElementById("nroCi").value="";
            $("#bcheckear").focus();
             /*
            $('#AgregarPersona').hide(); $('.modal-backdrop').hide();
            $('#PersonaModal').hide(); $('.modal-backdrop').hide();
            $("#email").focus();
            
            Swal.fire(
              'PERSONA CHECKEADA CORRECTAMENTE',
              '',
              'success'
            ) */
                     
        },
        error: function(response) {
         // var enlace ="https://www.anr.org.py/consulta-padron/";
         //console.log(response);
          Swal.fire(
            'EL NUMERO DE CEDULA NO EXISTE O INGRESO VALORES INCORRECTOS' ,
              'SI INGRESO CORRECTAMENTE EL NUMERO DE CEDULA FAVOR BUSCAR SI EL VOTANTE PERTENECE A CORONEL OVIEDO',
              'error'
            ) 
            $("#nroCi").focus();      
        },  
      });
  
    }    
  }
  
  function checkear(cedula){
    console.log('CI NROCheck: '+cedula);
        Swal.fire({
              title: 'ESTAS SEGURO DE CHECKEAR A ESTE VOTANTE?',
              icon: 'info',
              showDenyButton: true,
              showCancelButton: false,
              confirmButtonText: 'SI',
              confirmButtonColor: '#3085d6',
              denyButtonText: `NO`,
            }).then((result) => {
                  if (result.isConfirmed) {
                          $.ajax({
                              url: "{{route('checkearVotante')}}",
                              type:"POST",
                              data:{
                                  "_token": "{{ csrf_token() }}",
                                  ci:cedula,
                              },  
                              success:function(response){
                                  console.log(response);
                                  Swal.fire(
                                      'VOTANTE CHECKEADO CORRECTAMENTE',
                                      '',
                                      'success'
                                  )                                
                              },
                              error: function(response) {
                                  console.log(response.responseJSON);
                                  if (response.responseJSON.errors) {
                                          Swal.fire(
                                              '<b>ERROR: </b>'+response.responseJSON.errors,
                                                  '',
                                              'error'
                                          )
                                  }
                              },
                          });//FINAL DEL AJAX       
                  } else if (result.isDenied) {
                  //Swal.fire('Ocurrio un error al intentar recibir este expediente', 'Vuelva a intentarlo', 'info')
                }
        })
  }
</script>
  @if ($errors->any())
      @foreach ($errors->all() as $error)
        <script>
          Swal.fire(
              '{{ $error }}',
              'Vuelva a ingresar los datos',
              'error'
            )
        </script>  
      @endforeach
  @endif
  @isset($error)
    @if ($error==1)
        <script>
          Swal.fire(
              'OCURRIO UN ERROR INESPERADO',
              'Vuelva a ingresar los datos',
              'error'
            )
        </script>  
    @endif
  @endisset
  @if ($errors->any())
      @foreach ($errors->all() as $error)
        <script>
          Swal.fire(
              '{{ $error }}',
              'Vuelva a ingresar los datos',
              'error'
            )
        </script>  
      @endforeach
  @endif

@stop


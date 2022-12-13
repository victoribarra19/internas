@extends('adminlte::page')

@section('title', 'Consultar Padron')

@section('content_header')
<h1>CONSULTAR PADRON</h1>
@stop

@section('content')
<br> 
<div class="offset-3">
  <div class="col-md-10">
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
<script src="js/cdnjsdelivrnetnpmsweetalert2@11.js"></script>
<script>
  function consultarPadron(){
    let nombre = $('#nombre').val();
      let nroCi = $('#nroCi').val();
      $.ajax({
        url: "{{route('padron.store')}}",
        type:"POST",
        data:{
          "_token": "{{ csrf_token() }}",
          nroCi:nroCi
        },
        success:function(response){
            console.log(response);
            /*document.getElementById('remitente').value=response.nombre;
            document.getElementById("persona_id").value=response.id;   
            $('#AgregarPersona').hide(); $('.modal-backdrop').hide();
            $('#PersonaModal').hide(); $('.modal-backdrop').hide();
            $("#email").focus();
            Swal.fire(
              'Persona guardada correctamente',
              '',
              'success'
            ) */
                     
        },
        error: function(response) {
          Swal.fire(
            ''+response.responseJSON.errors,
              '',
              'error'
            )      
        },
      });
  }
  /*
  function guardarResCores(){

        Swal.fire({
              title: 'Esta seguro de guardar este Responsable o Corresponsable?',
              icon: 'info',
              showDenyButton: true,
              showCancelButton: false,
              confirmButtonText: 'SI',
              confirmButtonColor: '#3085d6',
              denyButtonText: `NO`,
              }).then((result) => {
                  if (result.isConfirmed) {

                      let poa_id = $('#poa_id').val(); 
                      
                      let dependencias_id = $('#dependencias_id').val();
                      let tipo_responsables_id = $('#tipo_responsables_id').val();
                      let objetivos_idREs = $('#objetivos_idREs').val();
                      
                      let dependencias_id_text = $('#dependencias_id option').filter(':selected').text();
                      let tipo_responsables_id_text = $('#tipo_responsables_id option').filter(':selected').text();
                      
                    //Selecciona una opción
                      if(dependencias_id_text=='Selecciona una opción'){
                          Swal.fire(
                            'Selecciona un <b>Responsable o Corresponsable</b>',
                              '',
                              'error'
                          )
                      }else if(tipo_responsables_id_text=='Selecciona una opción'){
                            Swal.fire(
                                'Selecciona un <b>Tipo de responsable</b>',
                                '',
                                'error'
                            )
                      }else{
                          $.ajax({
                              url: "{{route('padron.store')}}",
                              type:"POST",
                              data:{
                                  "_token": "{{ csrf_token() }}",
                                  dependencias_id:dependencias_id,
                                  objetivos_idREs:objetivos_idREs,
                                  tipo_responsables_id:tipo_responsables_id
                              },  
                              success:function(response){
                                  console.log(response);
                                  Swal.fire(
                                      'Responsable o corresponsable agregado correctamente..',
                                      '',
                                      'success'
                                  )                                
                                  var asset='{{ asset('') }}';
                                  if(poa_id==0){
                                      window.location.href =asset+"poa/create2/"+response.success  
                                  }else{
                                      window.location.href =asset+"poa/create2/"+poa_id  
                                  } 
                              },
                              error: function(response) {
                                  alert(response.responseJSON.errors);
                                  if (response.responseJSON.errors.cuerpo) {
                                          Swal.fire(
                                              'Error:'+response.responseJSON.errors,
                                                  '',
                                              'error'
                                          )
                                  }
                              },
                          });
                          
                      }
                      
                  } else if (result.isDenied) {
              }
        })
  }*/
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

@stop


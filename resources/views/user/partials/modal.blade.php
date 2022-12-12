<!-- The Modal -->
<div class="modal" id="Dependencia">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Asignar Dependencia</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <div class="card card-primary">
                
                <form action="{{route('user.asignarDependencia',)}}" method="POST" class="form">
                @CSRF
                <div class="form-group">
                  {!! Form::label('dependencia_id', 'Dependencia:') !!}&nbsp;&nbsp;
                  {!! Form::select('dependencia_id', $dependencias, null, ['class'=>'form-control']) !!}&nbsp;&nbsp;
                  @error('dependencia_id')
                      <small class="text-danger">{{$message}}</small>
                  @enderror
                  {!! Form::hidden($name, $value, [$options]) !!}      
                </div>
                       <!-- Modal footer -->
                    <div class="modal-footer">
                        
                            <div class="col"><button type="submit" class="btn btn-primary">Guardar</button></div>
                            <div class="col"><button type="reset" class="btn btn-secondary">Limpiar</button></div>
                            <div class="col"><a  class="btn btn-secondary" href="/pais">Cancelar</a></div>
                            <div class="col"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
                            
                    </div>
                    
                </form>
            </div>
        </div>
  
     
  
      </div>
    </div>
  </div>
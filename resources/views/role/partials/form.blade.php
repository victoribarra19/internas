
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese la denominación del Rol','required','autofocus']) !!}
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <h5 class='h5'>Lista de permisos</h5>
                @foreach ($permissions as $per)
                    <div>
                        <label>
                            {!! Form::checkbox('permissions[]', $per->id, null, ['class'=>'mr-1']) !!}
                            {{$per->description}}
                        </label>
                    </div>

                @endforeach

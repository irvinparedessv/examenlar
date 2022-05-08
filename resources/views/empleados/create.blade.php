@extends('layouts.app')

@section('css')

@endsection
@section('buttons')
<a class="btn btn-primary mr-2" href="{{route('empleados.index')}}">Regresar</a>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('empleados.store')}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label class="label">Edad</label>
                    <input required autocomplete="off" name="edad" class="form-control"
                           type="number" placeholder="edad">
                </div>
                <div class="form-group">
                    <label class="label">Direccion</label>
                    <input required autocomplete="off" name="direccion" class="form-control"
                           type="text" placeholder="Direccion">
                </div>
                <div class="form-group">
                    <label class="label">Sueldo</label>
                    <input required autocomplete="off" name="sueldo_base" class="form-control"
                           type="number" placeholder="Sueldo">
                </div>
                 <select name="sucursal" class="form-control  

                                     @error('supplier') is-invalid @enderror" id="supplier">
                
                                        <option>Seleccione---</option>
                
                                        @foreach ($sucursals as $supplier)
                
                                           <option value="{{ $supplier->id }}"
                
                                              >
                
                                              {{ $supplier->nombre }}</option>
                
                                        @endforeach
                
                                     </select>
               
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("empleados.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
@extends('layouts.app')



@section('css')



@endsection

@section('buttons')

   <a class="btn btn-primary mr-2" href="{{route('empleados.index')}}">Regresar</a>

@endsection

@section('content')

   <h2 class="text-center mb-5">Editar producto</h2>

      <div class="row justify-content-center">

         <div class="col-md-8">

            <form  method="POST" action="{{ route('empleados.update', ['empleado' => $empleado->id]) }}" 

               enctype="multipart/form-data" novalidate>

               @csrf

               @method('PUT')

                  <div class="row mb-3">

                  <label for="productName">Titulo Producto</label>

                  <div class="col-md-6">

                     <input type="text"

                     name="productName"

                     class="form-control @error('productName') is-invalid @enderror"

                     id="productName"

                     placeholder="Nombre del Producto"

                     value="{{ $empleado->productName }}"

                     />

                     @error('productName')

                     <span class="invalid-feedback d-block" role="alert">

                         <strong>{{ $message }}</strong>

                     </span>

                     @enderror

                  </div>

              </div>

              <div class="row mb-3">

                  <label for="price">Precio</label>

                  <div class="col-md-6">

                     <input type="text"

                     name="price"

                     class="form-control @error('price') is-invalid @enderror"

                     id="price"

                     placeholder="Precio del Producto"

                     value="{{ $empleado->price }}"

                     />

                     @error('price')

                     <span class="invalid-feedback d-block" role="alert">

                        <strong>{{ $message }}</strong>

                     </span>

                     @enderror

                  </div>

               </div>

               <div class="row mb-3">

                  <label for="barcode">Código de barra</label>

                  <div class="col-md-6">

                     <input type="text"

                     name="barcode"

                     class="form-control @error('barcode') is-invalid @enderror"

                     id="barcode"

                     placeholder="Código de barra"

                     value="{{ $empleado->barcode }}"

                     />

                     @error('barcode')

                     <span class="invalid-feedback d-block" role="alert">

                        <strong>{{ $message }}</strong>

                     </span>

                     @enderror

                  </div>

               </div>

               <div class="row mb-3">

                  <label for="supplier">Proveedores</label>

                  <div class="col-md-6">

                   

                     @error('supplier')

                     <span class="invalid-feedback d-block" role="alert">

                        <strong>{{ $message }}</strong>

                     </span>

                     @enderror  

                  </div>

               </div>

              <div class="row mb-3">

                  <label for="image">Selecciona una imagen para el Producto</label>

                  <div class="col-md-6">

                     <input type="file"

                        name="image"

                        class="form-control @error('image') is-invalid @enderror"

                        id="image"

                        placeholder="Seleccione una imagen"

                        value="{{old('image')}}"

                        />

                  </div>  

              </div>

               <div class="row mb-0">

               </div>

               <div class="form-group">

                  <input type="submit" class="btn btn-primary" value="Agregar Producto" />

               </div>

            </form>

         </div>

      </div>

@endsection



@section('js')



@endsection
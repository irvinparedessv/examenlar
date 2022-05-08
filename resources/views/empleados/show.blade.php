@extends('layouts.app')

@section('css')

@endsection
@section('buttons')
<a class="btn btn-primary mr-2" href="{{route('empleados.index')}}">Regresar</a>
@endsection
@section('content')

<article class="contenido-cliento">
    <h1 class="text-center mb-4">{{$empleado->nombre}}</h1>
    <div class="empleado-meta">
    
        <p>
            <span class="font-weight-bold text-primary">edad</span>
            {{$empleado->edad}}
        </p>
        <p>
            <span class="font-weight-bold text-primary">Sueldo</span>
            {{$empleado->sueldo_base}}
        </p>
    </div>

</article>

@endsection

@section('js')

@endsection
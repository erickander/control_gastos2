@extends('layouts.app')
@section('content')
<h4 class="bg-dark text-white" align="center">Editar Categorias</h4>
    <form action="{{route('movimientos.update',$movimientos->mov_id)}}" method="POST">
     	@csrf
     	
     <label>Detalle de la categoria</label>
     <p>
     <input type="numbrer" value="{{$movimientos->mov_cantidad}}" name="mov_cantidad" id="mov_cantidad">
 </p>
 <p>
     <input type="date" value="{{$movimientos->mov_fecha}}" name="mov_fecha" id="mov_fecha">
     </p>
     <p>
      Ingreso:<input value="{{$movimientos->mov_tipo}}" id="mov_tipo" type="radio" name="mov_tipo" value="1">
        Egreso:<input value="{{$movimientos->mov_tipo}}" id="mov_tipo" type="radio" name="mov_tipo" value="0">
        </p>
        <p>
    <input type="text" value="{{$movimientos->mov_detalle}}" id="mov_detalle" name="mov_detalle">
    </p>
    <p>
     <button class="btn btn-success">Guardar</button>
     </p>
     </form>
@endsection
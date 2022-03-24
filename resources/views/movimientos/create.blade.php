@extends('layouts.app')
@section('content')

<form action="{{route('movimientos.store')}}" method="POST">
     @csrf
     <div class="container">
         <div class="row">
            <div class="col-md-4">
                <label for="">Concepto</label>
                     <select name="tip_id" id="tip_id" class="form-control">
     	                 <option value="">Elige Una Opcion</option>
     	                 @foreach($tipos as $t)
     	                 <option value=" {{$t->tip_id}}"> {{$t->tip_descripcion}} </option>

     	                 @endforeach


        </select>	
       </div>
       <div class="container">
    
           
       
       <div class="col-md-4">
        <label for="">Fecha</label>
           <input type="date" name="mov_fecha" id="mov_fecha" class="form-control">
         Ingreso:<input type="radio" name="mov_tipo" value="1">
        Egreso:<input type="radio" name="mov_tipo" value="0">
        <p>
           <label>Detalle</label>
           <input type="text" name="mov_detalle" id="mov_detalle" class="form-control">
           <label>Cantidad</label>
           <input type="numbrer" name="mov_cantidad" id="mov_cantidad" class="form-control">
       </div>
       <div class="col-md-12 mt-3">
           <button class="btn btn-success">Guardar</button>
       </div>
       </div>
     </div>	
  </div>

</form>

@endsection
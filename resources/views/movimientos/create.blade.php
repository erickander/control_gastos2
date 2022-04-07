@extends('layouts.app')
@section('content')
<script src="{{asset('js/movimientos.js')}}"></script>

<form action="{{route('movimientos.store')}}" method="POST" onsubmit="return validar()">
     @csrf
     <div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
                        <h1 class="card-title" align="center">Registro de Movimientos</h1>
                <h3 for="">Concepto</h3>
                     <select name="tip_id" id="tip_id" class="form-control">
     	                 <option value="">Elige Una Opcion</option>
     	                 @foreach($tipos as $t)
     	                 <option value=" {{$t->tip_id}}"> {{$t->tip_descripcion}} </option>

     	                 @endforeach


        </select>	
       </div>
       <p>
       <div class="container">
    
           
       
       <div class="col-md-4">
        <h3 for="">Fecha</h3>
           <input type="date" name="mov_fecha" id="mov_fecha" class="form-control">
           <p>
       <h4> Ingreso:<input type="radio" name="mov_tipo" value="1"></h4>
        <h4>Egreso:<input type="radio" name="mov_tipo" value="0"><h4>
        </p>
        </p>
           <p>
           <h3>Detalle</h3>
           <input type="text" name="mov_detalle" id="mov_detalle" class="form-control">
           </p>
           <h3>Cantidad</h3>
           <input type="numbrer" name="mov_cantidad" id="mov_cantidad" class="form-control">
       </div>
       <div class="col-md-5 mt-4">
           <button class="btn btn-success">Guardar</button>
       </div>
   </div>
       </div>
       </div>
     </div>	
  </div>

</form>

@endsection

@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<script src="{{asset('js/tipos.js')}}"></script>

   <h4 class="bg-dark text-white">Formulario De Tipos</h4>
     <form action="{{route('tipos.store')}}" method="POST" onsubmit="return validar()">
     	@csrf
     	
     <label>Detalle De los Tipos</label>
     <input type="text" name="tip_descripcion" id="tip_descripcion">
     <button type="submit" class="btn btn-success">Guardar</button>
     </form>
   </div>
 </div>
</div>
</div>
@endsection
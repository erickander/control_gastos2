@extends('layouts.app')



@section('content')

   <h4 class="bg-dark text-white">Formulario De Tipos</h4>
     <form action="{{route('tipos.store')}}" method="POST">
     	@csrf
     	
     <label>Detalle De los Tipos</label>
     <input type="text" name="tip_descripcion" id="tip_descripcion">
     <button class="btn btn-success">Guardar</button>
     </form>
@endsection
@extends('layouts.app')



@section('content')

   <h4 class="bg-dark text-white">Formulario De Registro</h4>
     <form action="{{route('permisos.store')}}" method="POST">
     	@csrf
     	
     <label>Detalle de la categoria</label>
     <input type="text" name="per_tipo" id="per_tipo">
     <button class="btn btn-success">Guardar</button>
     </form>
@endsection
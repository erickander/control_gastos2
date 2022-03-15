@extends('layouts.app')
@section('content')
<h4 class="bg-dark text-white" align="center">Editar Categorias</h4>
    <form action="{{route('permisos.update',$permisos->per_id)}}" method="POST">
     	@csrf
     	
     <label>Detalle de la categoria</label>

     <input type="text" value="{{$permisos->per_tipo}}" name="per_tipo" id="per_tipo">
     <button class="btn btn-success">Guardar</button>
     </form>
@endsection
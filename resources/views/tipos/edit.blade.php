@extends('layouts.app')
@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
<h4 class="bg-dark text-white" align="center">Editar Categorias</h4>
    <form action="{{route('tipos.update',$tipos->tip_id)}}" method="POST">
     	@csrf
     	
     <label>Detalle de la categoria</label>

     <input type="text" value="{{$tipos->tip_descripcion}}" name="tip_descripcion" id="tip_descripcion">
     <button class="btn btn-success">Guardar</button>
     </form>
 </div>
</div>
</div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<h4 class="bg-dark text-white" align="center">Editar Usuarios</h4>
    <form action="{{route('users.update',$users->usu_id)}}" method="POST">
     	@csrf
     	
     <label class="col-md-4 col-form-label text-md-right">Lista De Usuarios</label>
     <p>
      <label  class="col-md-4 col-form-label text-md-right">Nombre</label>
     <input type="text" value="{{$users->usu_name}}" name="usu_name" id="usu_name"> 
     </p>

     <p>
      <label  class="col-md-4 col-form-label text-md-right">Cedula</label>
     <input type="text" value="{{$users->usu_cedula}}" name="usu_cedula" id="usu_cedula">
     </p>

     <p>
      <label  class="col-md-4 col-form-label text-md-right">Rol</label>
     <input type="text" value="{{$users->usu_rol}}" name="usu_rol" id="usu_rol">
     </p>

     <p>
      <label  class="col-md-4 col-form-label text-md-right">Email</label>
     <input type="text" value="{{$users->usu_email}}" name="usu_email" id="usu_email">
     </p>
      <button class="btn btn-success">Guardar</button>
     </form>
@endsection
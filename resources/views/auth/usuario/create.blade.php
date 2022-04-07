@extends('layouts.app')



@section('content')
<div class="container">
         <div class="row">
            <div class="col-md-9">
                <div class="card mb-6 border-info">
                    <div class="card-body">
   <h2 class="bg-dark text-white" align="center">Formulario De Registro</h2>
   <script src="{{asset('js/usuarios.js')}}"></script>
     <form action="{{route('users.store')}}" method="POST" onsubmit="return validar()">
     	@csrf
     	
     <label class="col-md-4 col-form-label text-md-right">Lista De Usuarios</label>
     <p>
      <label class="col-md-4 col-form-label text-md-right">Nombre</label>
     <input type="text" name="usu_name" id="usu_name"> 
     </p>

     <p>
      <label class="col-md-4 col-form-label text-md-right">Cedula</label>
     <input type="text" name="usu_cedula" id="usu_cedula">
     </p>

     <p>
      <label class="col-md-4 col-form-label text-md-right">Rol</label>
     <input type="text" name="usu_rol" id="usu_rol">
     </p>

     <p>
      <label class="col-md-4 col-form-label text-md-right">Email</label>
     <input type="text" name="usu_email" id="usu_email">
     </p>

     <p>
      <label class="col-md-4 col-form-label text-md-right">Contraseña</label>
     <input type="password" name="password" id="password">  
     </p>   
     <button class="btn btn-success" >Guardar</button>
     </form>
   </div>
 </div>
@endsection
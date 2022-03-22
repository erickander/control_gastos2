@extends('layouts.app')
@section('content')

<a class="btn btn-info text-white" href="{{route('movimientos.create')}}">Nuevo</a>
     

<table class="table">

     <th> # </th>
     <th> Tipo </th>
     <th>Concepto</th>
     <th>fecha</th>
     <th> Detalle </th>
     <th> Cantidad </th>
      <th>Acciones</th>
     </table>


@endsection
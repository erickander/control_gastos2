<h4 style="bg-green">Control de Gastos</h4>

<table class="table">

     <th> # </th>
     <br>
     <th>Nombre</th>
     <br>
     <th>Concepto</th>
     <br>
     <th> Detalle </th>
     <br>
     <th> Fecha </th>
     <br>
     <th>Tipo</th>
     <br>
     <th>Cantidad</th>
     <br>
     <th>Acciones</th>

     <?php
$t_ing=0;
$t_egr=0;
$t_saldo=0;

     ?>
     

 @foreach($movimientos  as  $mov)
 <?php
if($mov->mov_tipo==1) {

    $t_ing+=$mov->mov_cantidad;
}else{
    $t_egr+=$mov->mov_cantidad;
}
$t_saldo=$t_ing-$t_egr;
     ?>

   <tr> 
     <td>{{$loop->iteration }}</td>
     <td>{{$mov->usu_name}}</td>
     <br>
     <td>{{$mov->tip_descripcion}}</td>
     <br>
     <td>{{$mov->mov_detalle }}</td>
     <br>
     <td>{{$mov->mov_fecha}}</td>
     @if($mov->mov_tipo==1)
     <br>
    <td>Ingreso</td>
    @else
    <br>
    <td>Egreso</td>
    @endif
    <br>
     <td>${{number_format ($mov->mov_cantidad,2) }}</td>
     
     
     
     <td>

          <div class="row">
       <a href="{{route('movimientos.edit',$mov->mov_id)}}" class="btn btn-info btf-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg></a>

    <form action="{{route('movimientos.destroy',$mov->mov_id)}}" method="POST" onsubmit="return confirm('Desea Eliminar')">
    @csrf
<button class="btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></button>
</form>
</div>

     </td>
     </tr>
     @endforeach

     <td colspan="2">Totales:</td>
     <td> Ingreso: ${{number_format($t_ing)}} </td>
     <td>Egreso: ${{number_format($t_egr)}} </td>
     <td>Saldo: ${{number_format($t_saldo)}}</td>
     
    
     <table>

<h4 style="bg-green">Control de Gastos</h4>

<table class="table">

     <th> # </th>   
     <th>Nombre</th>     
     <th>Concepto</th>    
     <th> Detalle </th>    
     <th> Fecha </th>     
     <th>Tipo</th>     
     <th>Cantidad</th>     
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
     <td>{{$mov->tip_descripcion}}</td>    
     <td>{{$mov->mov_detalle }}</td>   
     <td>{{$mov->mov_fecha}}</td>
     @if($mov->mov_tipo==1)
    <td>Ingreso</td>
    @else 
    <td>Egreso</td>
    @endif
     <td>${{number_format ($mov->mov_cantidad,2) }}</td>
     
     
     
     <td>

          

     </td>
     </tr>
     @endforeach
     

     <td colspan="2">Totales:</td>
     <td> Ingreso: ${{number_format($t_ing)}} </td>
     <td>Egreso: ${{number_format($t_egr)}} </td>
     <td>Saldo: ${{number_format($t_saldo)}}</td>
        
     </table>

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movimientos extends Model
{
     public $timestamps=false;
    protected $table='movimientos';
    protected $primaryKey='mov_id';
    protected $fillable = [
        'mov_tipo','mov_fecha','mov_cantidad','mov_detalle','usu_id','tip_id',
    ];
}

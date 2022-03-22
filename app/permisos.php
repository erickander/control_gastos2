<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permisos extends Model
{   
    public $timestamps=false;
    protected $table='permisos';
    protected $primaryKey='tip_id';
    protected $fillable = [
        'tip_descripcion'
    ];

}

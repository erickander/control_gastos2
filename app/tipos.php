<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos extends Model
{
     public $timestamps=false;
    protected $table='tipos';
    protected $primaryKey='tip_id';
    protected $fillable = [
        'tip_descripcion'
    ];
}

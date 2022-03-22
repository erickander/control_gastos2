<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos extends Model
{
     public $timestamps=false;
    protected $table='tipos';
    protected $primaryKey='per_id';
    protected $fillable = [
        'per_tipo'
    ];
}

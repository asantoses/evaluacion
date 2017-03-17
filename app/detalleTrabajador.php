<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleTrabajador extends Model
{
     public function trabajador()
    {
        return $this->hasMany('App\Trabajador','trabajador_id','id');
    }

	protected $hidden =  ['created_at','updated_at','trabajador_id'];
}

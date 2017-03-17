<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
     public function detalles()
    {
        return $this->hasOne('App\DetalleTrabajador','trabajador_id','id');
    }
   
   protected $hidden =  ['created_at','updated_at'];


}

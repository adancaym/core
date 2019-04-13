<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    public $table = 'cuenta';
    public $primaryKey = 'id_cuenta';

    public function acciones(){
        return $this->hasMany(Accion::class,'id_cuenta');
    }

    public function host(){
        return $this->hasMany(Host::class);
    }
}

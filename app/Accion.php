<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    protected $table = 'accion';
    protected $primaryKey = 'id_accion';

    public function roles(){
        $this->belongsToMany(Rol::class,'rol_accion','id_rol','id_accion');
    }

    public function cuenta(){
        return $this->belongsTo(Cuenta::class,'id_accion','id_cuenta');
    }
}

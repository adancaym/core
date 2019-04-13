<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    public $primaryKey = 'id_rol';

    public function acciones(){
        return $this->belongsToMany(Accion::class,'rol_accion','id_rol','id_accion');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'rol_users', 'users_id', 'rol_id');
    }

    public function attachAcciones(array $acciones){
        return $this->acciones()->sync($acciones);
    }
}

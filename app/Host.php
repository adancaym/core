<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{

    public $table = 'host';
    public $primaryKey = 'id_host';

    public function cuenta(){
        return $this->belongsTo(Cuenta::class,'id_cuenta','id_cuenta');
    }
}

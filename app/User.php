<?php

namespace App;

use App\Constants\RoleConstants;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $primaryKey = 'id_users';
    public $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','id_cuenta',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Rol::class,'rol_users', 'users_id', 'rol_id');
    }

    public function attachRoles(array $roles){
        return $this->roles()->sync($roles);
    }

    public function isAdmin(){

        $roles = $this->roles()->get();

        foreach ($roles as $rol) if ($rol->id_rol  == RoleConstants::ID_ADMINISTRADOR) return true;

        return false;
    }
    public function isUser(){

        $roles = $this->roles()->get();

        foreach ($roles as $rol) if ($rol->id_rol  == RoleConstants::ID_USER) return true;

        return false;
    }
}

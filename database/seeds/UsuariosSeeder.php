<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();

        $user->id_users = 1;
        $user->id_cuenta = 1;
        $user->name = 'Adan Yañez';
        $user->email = 'adanyanezgonzalez@gmail.com';
        $user->password = 'admin';
        $user->save();
        $user->attachRoles(array(1,2));

        $user = new \App\User();
        $user->id_users = 2;
        $user->id_cuenta = 2;
        $user->name = 'Admin despacho';
        $user->email = 'despacho@despacho.com';
        $user->password = 'admin';
        $user->save();
        $user->attachRoles(array(1,2));

        $user = new \App\User();
        $user->id_users = 3;
        $user->id_cuenta = 3;
        $user->name = 'User despacho';
        $user->email = 'user@despacho.com';
        $user->password = 'user';
        $user->save();
        $user->attachRoles(array(2));
    }
}

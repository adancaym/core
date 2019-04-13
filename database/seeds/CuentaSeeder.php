<?php

use Illuminate\Database\Seeder;

class CuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newCuenta = new \App\Cuenta();

        $newCuenta->id_cuenta = 1;
        $newCuenta->cuenta = 'caym';
        $newCuenta->id_cuenta_padre = null;

        $newCuenta->save();

        $newCuenta = new \App\Cuenta();
        $newCuenta->id_cuenta = 2;
        $newCuenta->cuenta = 'core';
        $newCuenta->id_cuenta_padre = 1;
        $newCuenta->save();

        $newCuenta = new \App\Cuenta();
        $newCuenta->id_cuenta = 3;
        $newCuenta->cuenta = 'user';
        $newCuenta->id_cuenta_padre = 2;
        $newCuenta->save();

    }
}

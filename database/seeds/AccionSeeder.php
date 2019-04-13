<?php

use Illuminate\Database\Seeder;

class AccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new = new \App\Accion();

        $new->id_accion = 1;
        $new->accion = '/noticias';
        $new->controller = 'NoticiasController';
        $new->id_cuenta = 2;

        $new->save();

        $new = new \App\Accion();

        $new->id_accion = 2;
        $new->accion = '/contenidos';
        $new->controller = 'ContenidosController';
        $new->id_cuenta = 2;

        $new->save();

        $new = new \App\Accion();

        $new->id_accion = 3;
        $new->accion = '/home';
        $new->controller = 'ContenidosController';
        $new->id_cuenta = 2;

        $new->save();

    }
}

<?php

use Illuminate\Database\Seeder;

class HostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newhost = new \App\Host();

        $newhost->host = 'core';
        $newhost->default_controller = 'Despacho@index';
        $newhost->id_cuenta = 2;
        $newhost->save();

    }
}

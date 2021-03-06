<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CuentaSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(HostSeeder::class);
        $this->call(AccionSeeder::class);

    }
}

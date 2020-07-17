<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'root';
        $role->description = 'Super Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'client';
        $role->description = 'Cliente';
        $role->save();

        $role = new Role();
        $role->name = 'agent';
        $role->description = 'Agente';
        $role->save();

        $role = new Role();
        $role->name = 'contact';
        $role->description = 'Contacto';
        $role->save();

    }
}

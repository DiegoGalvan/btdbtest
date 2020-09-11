<?php

use App\models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'description' => 'Administrador',
        ]);
        Role::create([
            'description' => 'Editor',
        ]);
        Role::create([
            'description' => 'Lector',
        ]);
        Role::create([
            'description' => 'Suscriptor',
        ]);
    }
}

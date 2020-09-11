<?php

use App\models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Diego Galvan',
            'email' => 'diego@hagane.io',
            'password' => 'hashthis',
            'role_id' => 1,
        ]);
        User::create([
            'name' => 'Priscila Sanchez',
            'email' => 'psanchez@hagane.io',
            'password' => 'hashthis',
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'Gabriel Lopez',
            'email' => 'glopez@hagane.io',
            'password' => 'hashthis',
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'Brian Eno',
            'email' => 'beno@hagane.io',
            'password' => 'hashthis',
            'role_id' => 4,
        ]);
        User::create([
            'name' => 'Gretchen Mendez',
            'email' => 'gmendez@hagane.io',
            'password' => 'hashthis',
            'role_id' => 4,
        ]);
        User::create([
            'name' => 'Jake Logan',
            'email' => 'jlogan@hagane.io',
            'password' => 'hashthis',
            'role_id' => 4,
        ]);
    }
}

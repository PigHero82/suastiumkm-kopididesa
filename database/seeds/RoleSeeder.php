<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'superadmin',
            'description' => 'Super Administrator'
        ]);
        
        Role::create([
            'name' => 'adminmart',
            'description' => 'Administrator Mart'
        ]);

        Role::create([
            'name' => 'admincafe',
            'description' => 'Administrator Cafe'
        ]);

        Role::create([
            'name' => 'adminresto',
            'description' => 'Administrator Restoran'
        ]);

        Role::create([
            'name' => 'adminlain',
            'description' => 'Administrator Lain-lain'
        ]);

        Role::create([
            'name' => 'kasirmart',
            'description' => 'Kasir Mart'
        ]);

        Role::create([
            'name' => 'kasircaferesto',
            'description' => 'Kasir Cafe & Restoran'
        ]);

        Role::create([
            'name' => 'kasirlain',
            'description' => 'Kasir Lain-lain'
        ]);
    }
}

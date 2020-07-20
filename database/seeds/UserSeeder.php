<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'superadmin',
            'password' => Hash::make('superadmin123')
        ])
            ->roles()
            ->attach(Role::where('name', 'superadmin')->first());

        User::create([
            'username' => 'adminmart',
            'password' => Hash::make('adminmart123')
        ])
            ->roles()
            ->attach(Role::where('name', 'adminmart')->first());

        User::create([
            'username' => 'admincafe',
            'password' => Hash::make('admincafe123')
        ])
            ->roles()
            ->attach(Role::where('name', 'admincafe')->first());

        User::create([
            'username' => 'adminresto',
            'password' => Hash::make('adminresto123')
        ])
            ->roles()
            ->attach(Role::where('name', 'adminresto')->first());

        User::create([
            'username' => 'adminlain',
            'password' => Hash::make('adminlain123')
        ])
            ->roles()
            ->attach(Role::where('name', 'adminlain')->first());

        User::create([
            'username' => 'kasirmart',
            'password' => Hash::make('kasirmart123')
        ])
            ->roles()
            ->attach(Role::where('name', 'kasirmart')->first());

        User::create([
            'username' => 'kasircaferesto',
            'password' => Hash::make('kasircaferesto123')
        ])
            ->roles()
            ->attach(Role::where('name', 'kasircaferesto')->first());

        User::create([
            'username' => 'kasirlain',
            'password' => Hash::make('kasirlain123')
        ])
            ->roles()
            ->attach(Role::where('name', 'kasirlain')->first());
    }
}

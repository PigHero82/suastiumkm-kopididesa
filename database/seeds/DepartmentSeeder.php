<?php

use Illuminate\Database\Seeder;

use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Mart'
        ]);
        
        Department::create([
            'name' => 'Cafe'
        ]);

        Department::create([
            'name' => 'Restoran'
        ]);

        Department::create([
            'name' => 'Lain-lain'
        ]);
    }
}

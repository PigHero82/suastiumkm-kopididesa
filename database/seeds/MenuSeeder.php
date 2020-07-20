<?php

use Illuminate\Database\Seeder;

use App\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'department_id' => '2',
            'category_id'   => '1',
            'name'          => 'Kopi 1',
            'img'           => 'img/kopi/kopi1.jpg',
            'old_price'     => 10000,
            'new_price'     => 10000,
        ]);

        Menu::create([
            'department_id' => '2',
            'category_id'   => '1',
            'name'          => 'Kopi 2',
            'img'           => 'img/kopi/kopi2.jpg',
            'old_price'     => 20000,
            'new_price'     => 20000,
        ]);

        Menu::create([
            'department_id' => '2',
            'category_id'   => '1',
            'name'          => 'Kopi 3',
            'img'           => 'img/kopi/kopi3.jpg',
            'old_price'     => 30000,
            'new_price'     => 30000,
        ]);

        Menu::create([
            'department_id' => '2',
            'category_id'   => '2',
            'name'          => 'Kopi 4',
            'img'           => 'img/kopi/kopi4.jpg',
            'old_price'     => 40000,
            'new_price'     => 40000,
        ]);

        Menu::create([
            'department_id' => '2',
            'category_id'   => '2',
            'name'          => 'Kopi 5',
            'img'           => 'img/kopi/kopi5.jpg',
            'old_price'     => 50000,
            'new_price'     => 50000,
        ]);

        Menu::create([
            'department_id' => '2',
            'category_id'   => '2',
            'name'          => 'Kopi 6',
            'img'           => 'img/kopi/kopi6.jpg',
            'old_price'     => 60000,
            'new_price'     => 60000,
        ]);
    }
}

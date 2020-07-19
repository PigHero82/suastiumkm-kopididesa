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
            'nama'      => 'Kopi 1',
            'harga'     => 10000,
            'gambar'    => 'img/kopi/kopi1.jpg',
            'kategori'  => 1
        ]);

        Menu::create([
            'nama'      => 'Kopi 2',
            'harga'     => 20000,
            'gambar'    => 'img/kopi/kopi2.jpg',
            'kategori'  => 1
        ]);

        Menu::create([
            'nama'      => 'Kopi 3',
            'harga'     => 30000,
            'gambar'    => 'img/kopi/kopi3.jpg',
            'kategori'  => 1
        ]);

        Menu::create([
            'nama'      => 'Kopi 4',
            'harga'     => 40000,
            'gambar'    => 'img/kopi/kopi4.jpg',
            'kategori'  => 2
        ]);

        Menu::create([
            'nama'      => 'Kopi 5',
            'harga'     => 50000,
            'gambar'    => 'img/kopi/kopi5.jpg',
            'kategori'  => 2
        ]);

        Menu::create([
            'nama'      => 'Kopi 6',
            'harga'     => 60000,
            'gambar'    => 'img/kopi/kopi6.jpg',
            'kategori'  => 2
        ]);
    }
}

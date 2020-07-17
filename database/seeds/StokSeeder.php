<?php

use Illuminate\Database\Seeder;

use App\Stok;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stok::create([
            'nama' => "kopi",
            'satuan' => "gr",
            'jumlah' => 0
        ]);

        Stok::create([
            'nama' => "Air Mineral",
            'satuan' => "ml",
            'jumlah' => 0
        ]);
    }
}

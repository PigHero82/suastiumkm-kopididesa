<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'department_id' => 2,
            'category_id'   => 3,
            'name'          => 'kopi',
            'unit'          => 'gr',
            'stock'         => 0
        ]);

        Product::create([
            'department_id' => 2,
            'category_id'   => 4,
            'name'          => 'Air Mineral',
            'unit'          => 'ml',
            'stock'         => 0
        ]);
    }
}

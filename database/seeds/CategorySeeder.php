<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Kopi Panas'
        ]);
        
        Category::create([
            'name' => 'Kopi Dingin'
        ]);

        Category::create([
            'name' => 'Makanan'
        ]);
        
        Category::create([
            'name' => 'Minuman'
        ]);
    }
}

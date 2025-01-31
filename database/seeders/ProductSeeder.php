<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Vegetable Burger',
            'description' => 'Burger with vegetables inside',
            'price' => 19000,
            'image_path' => 'storage/img/product2.jpg',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Mineral Water',
            'description' => null,
            'price' => 7000,
            'image_path' => null,
            'category_id' => 2
        ]);
    }
}

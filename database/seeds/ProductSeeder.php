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
        $products = [];

        foreach(range(1,20) as $index){
            $products[]=[
            'name' => "Product $index",
            'price'=> rand(1,10) * 10,
            'category_id'=>rand(3,5),
            'created_at' => now(),
            'updated_at' => now(),
            ];
        }

        DB::table('products')->insert($products);
    }
}

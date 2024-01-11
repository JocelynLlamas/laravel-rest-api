<?php

use App\Models\Product;
use App\Models\Category;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory(5)->create();
        // Product::factory(20)->create();
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}

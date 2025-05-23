<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Laptops']);
        Category::create(['name' => 'Keyboards']);
        Category::create(['name' => 'Monitors']);
    }
}

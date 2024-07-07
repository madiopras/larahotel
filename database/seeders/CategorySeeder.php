<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['category_name' => 'Single Room'],
            ['category_name' => 'Double Room'],
            ['category_name' => 'Suite'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

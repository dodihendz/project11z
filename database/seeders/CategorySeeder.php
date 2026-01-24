<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  Category::factory(5)->create();
        Category::create([
            'name' => 'Category desgin inter',
            'slug' => 'category des-in',
            'color' => 'red',
        ]);
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'pers-onal',
            'color' => 'green',
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'UI-UX',
            'color' => 'yellow',
        ]);
    }
}

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
        ]);
        Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'pers-onal',
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'UI-UX',
        ]);
    }
}

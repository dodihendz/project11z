<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // add manual data seeding for an admin user
        // $superad = User::create([
        //     'name' => 'AdminSuper',
        //     'username' => 'adminSup01',
        //     'email' => 'BxN2t@example.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('adminpassword'),
        //     'remember_token' => Str::random(10),
        // ]);

        // Category::create([
        //     'name' => 'Category desgin inter',
        //     'slug' => 'category des-in',
        // ]);

        // Post::create([
        //     'title' => 'First Post Title',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'first-post-title',
        //     'body' => 'This is the body content of the first post. It contains more detailed information.
        //                 contains more detailed information. contains more detailed information. contains more detailed information.',
        // ]);
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);
        Post::factory(20)->recycle(
            [
               Category::all(),
               User::all(),
            ]
        )->create();
    }
}

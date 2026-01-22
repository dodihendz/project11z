<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'AdminSuper',
            'username' => 'adminSup01',
            'email' => 'BxN2t@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('adminpassword'),
            'remember_token' => Str::random(10),
        ]);
        User::factory(5)->create();
    }
}

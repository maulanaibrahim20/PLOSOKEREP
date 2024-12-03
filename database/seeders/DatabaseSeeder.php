<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Inventory;
use App\Models\Umkm;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = ['admin', 'kades', 'umkm', 'customer'];

        User::factory()->create([
            'email' => 'admin@gmail.com',
            'role' => 'admin',
        ]);

        foreach ($roles as $role) {
            User::factory()->create([
                'email' => fake()->unique()->safeEmail(),
                'role' => $role,
            ]);
        }

        Inventory::factory()->count(5)->create();
        Umkm::factory()->count(5)->create();
    }
}

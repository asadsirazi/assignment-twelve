<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\UserRole;
use App\Models\Bus;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'user_role' => UserRole::ADMIN->value,
            'phone_number' => '01700000000'
        ]);

        Location::factory(3)->create();
        Bus::factory(3)->create();
    }
}

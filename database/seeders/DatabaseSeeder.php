<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@bromo.id'],
            [
                'name' => 'Admin Utama',
                'password' => bcrypt('password'),
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin@jernih.id'],
            [
                'name' => 'Admin Jernih',
                'password' => bcrypt('password'),
            ]
        );
    }
}

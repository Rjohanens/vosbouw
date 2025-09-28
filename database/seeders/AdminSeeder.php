<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Robert Vos',
            'email' => 'admin@vosbouwnoord.nl',
            'email_verified_at' => now(),
            'password' => Hash::make('V0tgizokP8zwtPY'),
        ]);
    }
}

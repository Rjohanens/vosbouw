<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Robert Vos',
            'email' => 'admin@vosbouwnoord.nl',
        ]);

        Project::factory()->create([
            'description' => 'Dit is een project',
            'town' => 'Groningen',
            'execution_date' => now(),
            'category_id' => Category::factory()->create(),
        ]);
    }
}

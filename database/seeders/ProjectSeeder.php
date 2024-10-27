<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $verbouwing = Category::factory()->state([
            'name' => 'Verbouwing',
        ]);

        $renovatie = Category::factory()->state([
            'name' => 'Renovatie',
        ]);

        $isoleren = Category::factory()->state([
            'name' => 'Isoleren',
        ]);

        $bourtange = Project::factory()
            ->for($verbouwing, 'category')
            ->create([
                'title' => 'Badkamer verbouwen',
                'slug' => 'badkamer-bourtange',
                'description' => 'Een nieuwe badkamer',
                'execution_date' => '2024-01-01',
            ]);

        $bourtange_floor = Project::factory()
            ->for($verbouwing, 'category')
            ->create([
                'title' => 'Vloer betegelen',
                'slug' => 'vloer-bourtange',
                'description' => 'Een nieuwe vloer',
                'execution_date' => '2024-01-01',
            ]);

        $dakkapel = Project::factory()
            ->for($renovatie, 'category')
            ->create([
                'title' => 'Dakkapel plaatsen',
                'slug' => 'dakkapel-plaatsen',
                'description' => 'Een nieuwe dakkapel',
                'execution_date' => '2024-01-01',
            ]);

        $gevelbekleding = Project::factory()
            ->for($renovatie, 'category')
            ->create([
                'title' => 'Gevelbekleding vervangen',
                'slug' => 'gevelbekleding-vervangen',
                'description' => 'Een nieuwe gevelbekleding',
                'execution_date' => '2024-01-01',
            ]);

        $isolatie = Project::factory()
            ->for($isoleren, 'category')
            ->create([
                'title' => 'Isolatie aanbrengen',
                'slug' => 'isolatie-aanbrengen',
                'description' => 'Isolatie aanbrengen',
                'execution_date' => '2024-01-01',
            ]);

        $kozijnen = Project::factory()
            ->for($renovatie, 'category')
            ->create([
                'title' => 'Kozijnen vervangen',
                'slug' => 'kozijnen-vervangen',
                'description' => 'Kozijnen vervangen',
                'execution_date' => '2024-01-01',
            ]);

        // Add media to the project
        $bourtange
            ->addMedia(storage_path('app/public/images/projects/badkamer.jpg'))
            ->preservingOriginal()
            ->toMediaCollection();

        $bourtange_floor
            ->addMedia(storage_path('app/public/images/projects/vloer.jpg'))
            ->preservingOriginal()
            ->toMediaCollection();

        $dakkapel
            ->addMedia(storage_path('app/public/images/projects/dakkapel.jpg'))
            ->preservingOriginal()
            ->toMediaCollection();

        $gevelbekleding
            ->addMedia(storage_path('app/public/images/projects/gevel.jpg'))
            ->preservingOriginal()
            ->toMediaCollection();

        $isolatie
            ->addMedia(storage_path('app/public/images/projects/isolatie.jpg'))
            ->preservingOriginal()
            ->toMediaCollection();

        $kozijnen
            ->addMedia(storage_path('app/public/images/projects/kozijnen.jpg'))
            ->preservingOriginal()
            ->toMediaCollection();
    }
}

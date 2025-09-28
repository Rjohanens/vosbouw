<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $verbouwing = Category::factory()->create([
            'name' => 'Verbouwing',
        ]);

        $renovatie = Category::factory()->create([
            'name' => 'Renovatie',
        ]);

        $isoleren = Category::factory()->create([
            'name' => 'Isoleren',
        ]);

        $bourtange = Project::factory()
            ->create([
                'title' => 'Badkamer verbouwen',
                'slug' => 'badkamer-bourtange',
                'description' => 'Een nieuwe badkamer',
                'execution_date' => '2024-01-01',
                'category_id' => $verbouwing->id,
            ]);

        $bourtange_floor = Project::factory()
            ->create([
                'title' => 'Vloer betegelen',
                'slug' => 'vloer-bourtange',
                'description' => 'Een nieuwe vloer',
                'execution_date' => '2024-01-01',
                'category_id' => $verbouwing->id,
            ]);

        $dakkapel = Project::factory()
            ->create([
                'title' => 'Dakkapel plaatsen',
                'slug' => 'dakkapel-plaatsen',
                'description' => 'Een nieuwe dakkapel',
                'execution_date' => '2024-01-01',
                'category_id' => $renovatie->id,
            ]);

        $gevelbekleding = Project::factory()
            ->create([
                'title' => 'Gevelbekleding vervangen',
                'slug' => 'gevelbekleding-vervangen',
                'description' => 'Een nieuwe gevelbekleding',
                'execution_date' => '2024-01-01',
                'category_id' => $renovatie->id,
            ]);

        $isolatie = Project::factory()
            ->create([
                'title' => 'Isolatie aanbrengen',
                'slug' => 'isolatie-aanbrengen',
                'description' => 'Isolatie aanbrengen',
                'execution_date' => '2024-01-01',
                'category_id' => $isoleren->id,
            ]);

        $kozijnen = Project::factory()
            ->create([
                'title' => 'Kozijnen vervangen',
                'slug' => 'kozijnen-vervangen',
                'description' => 'Kozijnen vervangen',
                'execution_date' => '2024-01-01',
                'category_id' => $renovatie->id,
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

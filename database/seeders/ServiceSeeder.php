<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $renovatie = Service::factory()->create([
            'slug' => 'renovatie',
            'name' => 'Renovatie',
            'description' => 'Renovatie van woningen en bedrijfspanden.',
        ]);

        $isolatie = Service::factory()->create([
            'slug' => 'isoleren',
            'name' => 'Isoleren',
            'description' => 'Isolatie van muren, daken en gevels.',
        ]);

        $betegelen = Service::factory()->create([
            'slug' => 'tegels-zetten',
            'name' => 'Tegels zetten',
            'description' => 'Tegels zetten in badkamers en keukens.',
        ]);

        $renovatie
            ->addMedia(storage_path('app/public/images/services/renovatie.jpg'))
            ->preservingOriginal()
            ->toMediaCollection();

        $isolatie
            ->addMedia(storage_path('app/public/images/services/isolatie.jpg'))
            ->preservingOriginal()
            ->toMediaCollection();

        $betegelen
            ->addMedia(storage_path('app/public/images/services/betegelen.jpg'))
            ->preservingOriginal()
            ->toMediaCollection();
    }
}

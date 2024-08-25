<?php

namespace Database\Seeders;

use App\Models\ReservasiItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            ['title' => 'Fun Diving', 'description' => 'Includes: Scuba Set, Meals 1x, Documentation, Guide, Boat', 'duration' => '2.5 hours', 'price' => 300000],
            ['title' => 'Snorkeling', 'description' => 'Includes: Snorkeling Gear, Meals 1x, Documentation, Guide, Boat', 'duration' => '1.5 hours', 'price' => 400000],
            ['title' => 'Research', 'description' => 'Includes: Scuba Set, Documentation, Guide, Boat', 'duration' => 'Custom', 'price' => 350000],
            ['title' => 'Sunset Trip', 'description' => 'Includes: Documentation, Guide, Boat', 'duration' => '1 hour', 'price' => 250000],
            ['title' => 'Tracking Bukit Melka', 'description' => 'Includes: Transportation, Snacks, Guide, Documentation', 'duration' => '4-6 hours', 'price' => 150000],
            ['title' => 'Fishing', 'description' => 'Includes: Documentation, Guide, Boat', 'duration' => 'Custom', 'price' => 700000],
            ['title' => 'Isi Tabung Selam', 'description' => '', 'duration' => 'Custom', 'price' => 50000],
            ['title' => 'Coba Selam SCUBA', 'description' => 'Includes: Scuba Set, Meals 1x, Documentation, Guide, Boat', 'duration' => '2.5 hours', 'price' => 550000],
            ['title' => 'Transplantasi Karang', 'description' => 'Includes: Scuba Set, Documentation, Guide, Boat', 'duration' => '2.5 hours', 'price' => 700000],
            ['title' => 'Perawatan Karang', 'description' => 'Includes: Scuba Set, Documentation, Guide, Boat', 'duration' => '2.5 hours', 'price' => 550000],
        ];

        foreach ($packages as $package) {
            ReservasiItem::create($package);
        }
    }
}

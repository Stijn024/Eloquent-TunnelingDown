<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected array $brands = [
        'Opel',
        'Volkswagen',
        'Honda',
        'Ford',
        'Hyundai',
    ];

    public function run(): void
    {

        //Optional: Empty tables first
        Brand::truncate();
        Car::truncate();

        foreach ($this->brands as $brand) {

            Brand::factory()
            ->state(new Sequence(
                ['name' => $brand],
            ))
            ->hasCars(5)
            ->create();

        }
    }
}

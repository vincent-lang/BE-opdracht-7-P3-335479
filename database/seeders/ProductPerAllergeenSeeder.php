<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPerAllergeenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 1,
            'AllergeenId' => 2
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 1,
            'AllergeenId' => 1
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 1,
            'AllergeenId' => 3
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 3,
            'AllergeenId' => 4
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 6,
            'AllergeenId' => 5
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 9,
            'AllergeenId' => 2
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 9,
            'AllergeenId' => 5
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 10,
            'AllergeenId' => 2
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 12,
            'AllergeenId' => 4
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 13,
            'AllergeenId' => 1
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 13,
            'AllergeenId' => 4
        ]);
        \App\Models\ProductPerAllergeen::create([
            'ProductId' => 13,
            'AllergeenId' => 5
        ]);
    }
}

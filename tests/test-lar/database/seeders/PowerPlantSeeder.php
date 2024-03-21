<?php

namespace Database\Seeders;

use App\Models\PowerPlant;
use App\Models\Postcode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PowerPlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postcodes = Postcode::inRandomOrder()->limit(10)->get(); // Adjust limit as needed

        foreach ($postcodes as $postcode) {
            // Create instances of ModelA
            PowerPlant::create([
                'name' => Str::random(5), // Get value from ModelA factory
                'postcode_nr' => $postcode->postcode // Or any field you want from ModelB
                // Add other fields as needed
            ]);
            

        }
    }
}

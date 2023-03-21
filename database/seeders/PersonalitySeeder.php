<?php

namespace Database\Seeders;

use App\Models\Personality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/personality.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Personality::create([
                    'name' => $data['0'],
                ]);    
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}

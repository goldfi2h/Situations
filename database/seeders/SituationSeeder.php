<?php

namespace Database\Seeders;

use App\Models\Situation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SituationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  
        $csvFile = fopen(base_path("database/data/situations.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Situation::create([
                    'name' => $data['1'],
                    'description' => $data['2'],
                    'bonus'=> $data['3'],
                    'neutral' => $data['4'],
                    'punishment'=> $data['5'],
                ]);    
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}

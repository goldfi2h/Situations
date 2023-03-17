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
                    'name' => $data['0'],
                    'description' => $data['1'],
                    'bonus'=> $data['2'],
                    'neutral' => $data['3'],
                    'punishment'=> $data['4'],
                ]);    
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}

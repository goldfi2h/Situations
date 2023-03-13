<?php

namespace Database\Seeders;

use App\Models\Situation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrySituationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        //$csvFile = fopen(base_path("database/data/situations.csv"), "r");
        $csvFile = fopen(base_path("database/data/entries-situation.csv"), "r");

        $firstline = true;


        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
            $situation=Situation::find($data['0']);
            $situation->entries()->attach($data['1'],['true_description'=>$data['2']]);
            }
            $firstline = false;
        }
        fclose($csvFile);




    }
}

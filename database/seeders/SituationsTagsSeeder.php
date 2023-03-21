<?php

namespace Database\Seeders;

use App\Models\Situation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SituationsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/situations-tags.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
            $situation=Situation::find($data['0']);
            $situation->tags()->attach($data['1']);
            }
            $firstline = false;
        }
        fclose($csvFile);


    }
}

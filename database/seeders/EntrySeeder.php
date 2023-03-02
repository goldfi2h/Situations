<?php

namespace Database\Seeders;

use App\Models\Entry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entry::create([
            'name'=>'the Sims'
        ]);
        Entry::create([
            'name'=>'the Sims 2'
        ]);
        Entry::create([
            'name'=>'the Sims 3'
        ]);
        Entry::create([
            'name'=>'the Sims 4'
        ]);
    }
}

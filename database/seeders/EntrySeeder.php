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
            'id' => 'TS1',
            'name'=>'the Sims'
        ]);
        Entry::create([
            'id' => 'TS2',
            'name'=>'the Sims 2'
        ]);
        Entry::create([
            'id' => 'TS3',
            'name'=>'the Sims 3'
        ]);
        Entry::create([
            'id' => 'TS4',
            'name'=>'the Sims 4'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name'=>'Wszystkie dzieci'
        ]);
        Tag::create([
            'name'=>'Burmistrz'
        ]);
        Tag::create([
            'name'=>'Małe dziecko'
        ]);
        Tag::create([
            'name'=>'Dzieci'
        ]);
        Tag::create([
            'name'=>'Zwierzaki'
        ]);
        Tag::create([
            'name'=>'Mój pierwszy zwierzak'
        ]);
        Tag::create([
            'name'=>'Nastolatki'
        ]);
        Tag::create([
            'name'=>'Gra turowa'
        ]);
        Tag::create([
            'name'=>'Restauracja'
        ]);
        Tag::create([
            'name'=>'Kluby'
        ]);
        Tag::create([
            'name'=>'Dyskoteka'
        ]);
        Tag::create([
            'name'=>'Uzależnienie'
        ]);
        Tag::create([
            'name'=>'Popularność'
        ]);
        Tag::create([
            'name'=>'Przyjęcia'
        ]);
        Tag::create([
            'name'=>'Romanse'
        ]);
        Tag::create([
            'name'=>'Intrygi'
        ]);
        Tag::create([
            'name'=>'Rodzicielstwo'
        ]);
        Tag::create([
            'name'=>'Modyfikacje'
        ]);
        Tag::create([
            'name'=>'Śmierć'
        ]);
        Tag::create([
            'name'=>'Ulubione'
        ]);
        Tag::create([
            'name'=>'Ekologia'
        ]);
    }
}

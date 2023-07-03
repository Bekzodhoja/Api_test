<?php

namespace Database\Seeders;

use App\Models\Attribut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attribut::create(['name'=>'color']);
        Attribut::create(['name'=>'material']);
        Attribut::create(['name'=>'size']);
    }
}

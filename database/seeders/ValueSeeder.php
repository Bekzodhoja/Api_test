<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            'attribut_id' => 1,
            'name' => [
                'uz' => 'qizil',
                'en' => 'red'
            ]
        ]);

        Value::create([
            'attribut_id' => 1,
            'name' => [
                'uz' => 'kok',
                'en' => 'blue'
            ]
        ]);

        Value::create([
            'attribut_id' => 1,
            'name' => [
                'uz' => 'qora',
                'en' => 'black'
            ]
        ]);


        Value::create([
            'attribut_id' => 2,
            'name' => [
                'uz' => 'MDF',
                'en' => 'MDF'
            ]
        ]);

        Value::create([
            'attribut_id' => 2,
            'name' => [
                'uz' => 'Ldcp',
                'en' => 'Ldcp'
            ]
        ]);
    }
}

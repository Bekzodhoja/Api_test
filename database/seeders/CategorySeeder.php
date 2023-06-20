<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>[
                'uz'=>'Kreslo',
                'en'=>'Chair'
            ],

        ]);
        
        Category::create([
            'name'=>[
                'uz'=>'Divan',
                'en'=>'Bad'
            ],

        ]);

        Category::create([
            'name'=>[
                'uz'=>'Stol',
                'en'=>'Desc'
            ],

        ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=User::create([
            'name'=>'Jon',
            'email'=>'j@gmail.uz',
            'password'=>Hash::make(123123),
            'phone'=>'+99999999',
        ]);

        $admin->roles()->attach(1);

        User::factory()->count(10)->hasAttached([Role::find(2)])->create();
    }
}

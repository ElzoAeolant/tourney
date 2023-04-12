<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@pepebots.mx',
            'password' => Hash::make('slth$s2uclR'),
            'role_id' => 1,
            'picture' => '../img/faces/face-0.jpg'
        ]);

        User::factory()->create([
            'id' => 2,
            'name' => 'Creator',
            'email' => 'creator@pepebots.mx',
            'password' => Hash::make('1rOx2sPLC*a'),
            'role_id' => 2,
            'picture' => '../img/faces/face-0.jpg'
        ]);

        User::factory()->create([
            'id' => 3,
            'name' => 'Member',
            'email' => 'member@pepebots.mx',
            'password' => Hash::make('@lx5dro2O#r'),
            'role_id' => 3,
            'picture' => '../img/faces/face-0.jpg'
        ]);

       
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom'=>'SANON',
            'prenom'=>'Monica',
            'email'=>'monic@gmail.com',
            'password'=>bcrypt('1234'),
            'role_id'=>1
        ]);
      
        User::create([
            'nom'=>'SANON',
            'prenom'=>'Monica',
            'email'=>'moni@gmail.com',
            'password'=>bcrypt('8963'),
            'role_id'=>2
        ]);
        User::create([
            'nom'=>'Kote',
            'prenom'=>'dalila',
            'email'=>'dali@gmail.com',
            'password'=>bcrypt('4561'),
            'role_id'=>2
        ]);
        User::create([
            'nom'=>'POUYA',
            'prenom'=>'Pulcherie',
            'email'=>'pul@gmail.com',
            'password'=>bcrypt('7896'),
            'role_id'=>2
        ]);
    
    
    }
} 

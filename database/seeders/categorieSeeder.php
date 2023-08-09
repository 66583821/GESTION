<?php

namespace Database\Seeders;

use App\Models\categorie;
use Illuminate\Database\Seeder;

class categorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        categorie::create([
            'nom'=>'LAIT',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        categorie::create([
            'nom'=>'BEURRE',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        categorie::create([
            'nom'=>'HUILE',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}

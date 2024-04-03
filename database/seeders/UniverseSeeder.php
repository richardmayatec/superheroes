<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Universe;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $universe = new Universe;
        $universe->universe_name = "DC Cómics";
        $universe->save();

        Universe::create([
            'universe_name'    =>  'Marvel'
        ]);
        
        Universe::create([
            'universe_name'    =>  'Cantinflas Show'
        ]);
    }
}

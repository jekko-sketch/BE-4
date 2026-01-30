<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergeenSeeder extends Seeder
{
    public function run()
    {
        DB::table('allergenen')->insert([
            ['naam' => 'Gluten', 'omschrijving' => 'Dit product bevat gluten'],
            ['naam' => 'Gelatine', 'omschrijving' => 'Dit product bevat gelatine'],
            ['naam' => 'AZO-Kleurstof', 'omschrijving' => 'Dit product bevat AZO-kleurstoffen'],
            ['naam' => 'Lactose', 'omschrijving' => 'Dit product bevat lactose'],
            ['naam' => 'Soja', 'omschrijving' => 'Dit product bevat soja'],
        ]);
    }
}

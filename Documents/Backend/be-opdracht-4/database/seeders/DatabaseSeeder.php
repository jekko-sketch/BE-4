<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
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
public function run(): void
{
    $this->call([
        AllergeenSeeder::class,
        ProductSeeder::class,
        ContactSeeder::class,
        LeverancierSeeder::class,
        MagazijnSeeder::class,
        ProductPerAllergeenSeeder::class,
        ProductPerLeverancierSeeder::class,
    ]);
}

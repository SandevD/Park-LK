<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

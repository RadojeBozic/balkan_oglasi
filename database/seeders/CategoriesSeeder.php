<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Automobili', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nekretnine', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Poslovi', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tehnika', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Usluge', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Moda i odeća', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sport i rekreacija', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Poljoprivreda', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ostalo', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

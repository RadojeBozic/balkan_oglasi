<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['name' => 'Srbija', 'code' => 'RS', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hrvatska', 'code' => 'HR', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bosna i Hercegovina', 'code' => 'BA', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Crna Gora', 'code' => 'ME', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

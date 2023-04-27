<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 100; $i++) {
            DB::table('category')->insert([
                'name' => "asad" . $i,
                'type' => "asad" . $i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

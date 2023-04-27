<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 100; $i++) {
            DB::table('product')->insert([
                [
                    'supplier_id' => $i,
                    'category_id' =>  $i,
                    'name' => "Product".  $i,
                    'price' =>  $i,
                    'description' => "Description of Product". $i,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}

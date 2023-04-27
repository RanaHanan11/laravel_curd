<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('supplier')->insert([
                'name' => 'Supplier ' . $i,
                'phone' => '123-456-789'. $i,
                'address' => '123 Main St, Anytown USA'. $i,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

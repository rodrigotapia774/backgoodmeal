<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User defect
        DB::table('brands')->insert([
            'id' => 1,
            'user_id' => 1,
            'name' => 'Carozzi',
        ]);

        DB::table('brands')->insert([
            'id' => 2,
            'user_id' => 1,
            'name' => 'San Jose',
        ]);

        DB::table('brands')->insert([
            'id' => 3,
            'user_id' => 1,
            'name' => 'Coca Cola',
        ]);

        DB::table('brands')->insert([
            'id' => 4,
            'user_id' => 1,
            'name' => 'Soprole',
        ]);

        DB::table('brands')->insert([
            'id' => 5,
            'user_id' => 1,
            'name' => 'Costa',
        ]);

        DB::table('brands')->insert([
            'id' => 6,
            'user_id' => 1,
            'name' => 'Quilques',
        ]);
    }
}

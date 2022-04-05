<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User defect
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'José Enrique Castro',
            'email' => 'jcastro@goodmeal.com',
            'password' => Hash::make('password'),
        ]);
    }
}

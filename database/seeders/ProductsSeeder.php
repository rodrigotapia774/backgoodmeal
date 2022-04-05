<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'user_id' => 1,
            'brand_id' => 1,
            'name' => 'Fetuchini',
            'price' => 1200.00,
            'code' => 1264244,
            'sku' => 'AS464FGT34',
            'type' => 'Seco',
            'elaboration' => Carbon::parse('2022-01-01'),
            'expiration' => Carbon::parse('2022-04-05'),
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'brand_id' => 1,
            'name' => 'Caracoquesos',
            'price' => 1780.00,
            'code' => 2354568872,
            'sku' => 'QW354FRTG3',
            'type' => 'Seco',
            'elaboration' => Carbon::parse('2022-01-11'),
            'expiration' => Carbon::parse('2022-04-15'),
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'brand_id' => 2,
            'name' => 'Jurel 400G',
            'price' => 780.00,
            'code' => 2326322424,
            'sku' => 'SDER567HY67',
            'type' => 'Seco',
            'elaboration' => Carbon::parse('2022-01-04'),
            'expiration' => Carbon::parse('2022-03-25'),
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'brand_id' => 3,
            'name' => 'Fanta 1,5 Lt',
            'price' => 1450.00,
            'code' => 348963908,
            'sku' => 'DF564GN78J',
            'type' => 'Seco',
            'elaboration' => Carbon::parse('2022-01-01'),
            'expiration' => Carbon::parse('2022-04-05'),
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'brand_id' => 4,
            'name' => 'Yogurt Griego',
            'price' => 670.00,
            'code' => 122979703659,
            'sku' => 'SD455FGH78',
            'type' => 'Frio',
            'elaboration' => Carbon::parse('2022-01-01'),
            'expiration' => Carbon::parse('2022-04-20'),
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'brand_id' => 5,
            'name' => 'Galletas Criollitas',
            'price' => 460.00,
            'code' => 23070893225445,
            'sku' => 'DHDB586MFH36',
            'type' => 'Seco',
            'elaboration' => Carbon::parse('2022-01-20'),
            'expiration' => Carbon::parse('2022-04-01'),
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'brand_id' => 5,
            'name' => 'Chocolate 80% CACAO',
            'price' => 2300.00,
            'code' => 358574022343422,
            'sku' => 'SHSHS44733B7474',
            'type' => 'Seco',
            'elaboration' => Carbon::parse('2022-02-02'),
            'expiration' => Carbon::parse('2022-05-15'),
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'brand_id' => 6,
            'name' => 'Queso Mantecoso',
            'price' => 4500.00,
            'code' => 343453423008978573,
            'sku' => 'DJDBJ45J5N55',
            'type' => 'Frio',
            'elaboration' => Carbon::parse('2022-01-30'),
            'expiration' => Carbon::parse('2022-04-28'),
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'brand_id' => 2,
            'name' => 'Mekén',
            'price' => 230.00,
            'code' => 121090344309476,
            'sku' => 'SJDJD447844JNJ2323',
            'type' => 'Seco',
            'elaboration' => Carbon::parse('2022-01-21'),
            'expiration' => Carbon::parse('2022-04-23'),
        ]);

        DB::table('products')->insert([
            'user_id' => 1,
            'brand_id' => 3,
            'name' => 'Bebida Isotonica',
            'price' => 1400.00,
            'code' => 121208955874363,
            'sku' => 'SH5676J5N666KL6',
            'type' => 'Seco',
            'elaboration' => Carbon::parse('2022-03-03'),
            'expiration' => Carbon::parse('2022-05-05'),
        ]);
    }
}

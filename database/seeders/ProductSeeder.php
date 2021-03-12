<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'Handlebar',
            'product_description' => 'Made from Carbon fiber',
            'price' => 2500,
            'status' => 'Available'
        ]);
        DB::table('products')->insert([
            'product_name' => 'fork',
            'product_description' => 'Made from titanium',
            'price' => 150000,
            'status' => 'Available'
        ]);
        DB::table('products')->insert([
            'product_name' => 'Saddle',
            'product_description' => 'Made from leather and foam',
            'price' => 1300,
            'status' => 'Available'
        ]);
    }
}

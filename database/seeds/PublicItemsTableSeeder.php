<?php

use Illuminate\Database\Seeder;

class PublicItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'item' => 'Water Bottle',
       'category' => 'Daily Life',
       'one_line_description' => 'A Full 9 oz. Water Bottle Used But Still Like New',
       'price' => 3.99
       ]);

       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'item' => 'Laravel 5 Textbook',
       'category' => 'Book',
       'one_line_description' => 'A Laravel 5 Textbook for CSCIE15',
       'price' => 10.99
       ]);

       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'item' => 'Red and Green Sweater',
       'category' => 'Clothing',
       'one_line_description' => 'A Nice Red and Green Sweater for the Holiday Season',
       'price' => 7.99
       ]);
    }
}

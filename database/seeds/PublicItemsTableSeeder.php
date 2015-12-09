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
       'user_id' => 1,
       'item' => 'Water Bottle',
       'category' => 'Daily Life',
       'one_line_description' => 'A Full 9 oz. Water Bottle Used But Still Like New',
       'price' => 3.99,
       'detailed_description' => 'This is a very good water bottle suitable for sports and also just daily outdoor activities.'
       ]);

       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'user_id' => 1,
       'item' => 'Laravel 5 Textbook',
       'category' => 'Book',
       'one_line_description' => 'A Laravel 5 Textbook for CSCIE15',
       'price' => 10.99,
       'detailed_description' => 'This Laravel 5 Textbook introduces you to the basics of Laravel and is a good guide for building dynamic web applications.'
       ]);

       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'user_id' => 2,
       'item' => 'Red and Green Sweater',
       'category' => 'Clothing',
       'one_line_description' => 'A Nice Red and Green Sweater for the Holiday Season',
       'price' => 7.99,
       'detailed_description' => 'This red and green sweater is perfect for the Christmas season and will leave a happy smile on your face in the weeks to come.'
       ]);
    }
}

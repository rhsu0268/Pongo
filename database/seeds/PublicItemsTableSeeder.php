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
       'item' => 'Organic Chemistry Textbook',
       'category' => 'Book',
       'one_line_description' => 'A Well-Written Organic Chemistry Textbook For an A+ Student!',
       'price' => 23.99,
       'detailed_description' => 'This is a very good textbook for organic chemistry.',
       'bought' => FALSE
       ]);

       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'user_id' => 2,
       'item' => 'Headphones',
       'category' => 'Technology',
       'one_line_description' => 'A Pair of Nice i-phone Headphones For Good Enjoyment!',
       'price' => 3.99,
       'detailed_description' => 'Have you lose your headphones? Have no fear, this set of headphones is cheap and durable.',
       'bought' => FALSE
       ]);

       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'user_id' => 1,
       'item' => 'North Face Jacket',
       'category' => 'Clothing',
       'one_line_description' => 'A Very Warm North Face Jacket for Winter!',
       'price' => 12.99,
       'detailed_description' => 'A very nice jacket to keep you warm from the winter.',
       'bought' => FALSE
       ]);
    }
}

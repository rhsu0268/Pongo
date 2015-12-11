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
       'bought' => TRUE
       ]);

       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'user_id' => 1,
       'item' => 'GWU Hoodie',
       'category' => 'Clothing',
       'one_line_description' => 'A Warm Hoodie to Keep You Warm From the Cold!',
       'price' => 11.99,
       'detailed_description' => 'This is a warm hoodie that will shield you from the brutal winters in Boston!',
       'bought' => TRUE
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
       'bought' => TRUE
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

       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'user_id' => 2,
       'item' => 'Coffee Mug',
       'category' => 'Daily Life',
       'one_line_description' => 'A Great Mug To Enjoy Good Coffee!',
       'price' => 5.99,
       'detailed_description' => 'This mug is so amazing. It allows you to enjoy your coffee whether strong or weak.',
       'bought' => FALSE
       ]);
    }
}

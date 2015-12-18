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

       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'user_id' => 3,
       'item' => 'Coffee Mug',
       'category' => 'Daily Life',
       'one_line_description' => 'A Very Nice Coffee Mug for Winter!',
       'price' => 5.99,
       'detailed_description' => 'This is a very nice mug for making tea or coffee.',
       'bought' => TRUE
       ]);

       DB::table('public_items')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'user_id' => 4,
       'item' => 'Binder',
       'category' => 'School Supply',
       'one_line_description' => 'A nice binder for notes and classes!',
       'price' => 5.99,
       'detailed_description' => 'This is a nice binder that will get you through coursework.',
       'bought' => TRUE
       ]);


    }
}

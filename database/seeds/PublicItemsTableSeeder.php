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
    }
}

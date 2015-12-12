<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $public_item_id = \App\PublicItem::where('item', '=', 'Organic Chemistry Textbook')->pluck('id');
        DB::table('transactions')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'transaction_type' => 'BUY',
        'public_item_id' => $public_item_id,
        'user_id' => 1,
        'tax' => 2.40,
        'total' => 26.39
        ]);

        $public_item_id = \App\PublicItem::where('item', '=', 'GWU Hoodie')->pluck('id');
        DB::table('transactions')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'transaction_type' => 'BUY',
        'public_item_id' => $public_item_id,
        'user_id' => 1,
        'tax' => 1.20,
        'total' => 13.19
        ]);

        $public_item_id = \App\PublicItem::where('item', '=', 'Headphones')->pluck('id');
        DB::table('transactions')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'transaction_type' => 'BUY',
        'public_item_id' => $public_item_id,
        'user_id' => 2,
        'tax' => 0.40,
        'total' => 4.39
        ]);
    }
}

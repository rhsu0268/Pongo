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

        $public_item_id = \App\PublicItem::where('item', '=', 'Water Bottle')->pluck('id');
        DB::table('transactions')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'transaction_type' => 'BUY',
        'public_item_id' => $public_item_id,
        'user_id' => 1
        ]);

        $public_item_id = \App\PublicItem::where('item', '=', 'Laravel 5 Textbook')->pluck('id');
        DB::table('transactions')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'transaction_type' => 'BUY',
        'public_item_id' => $public_item_id,
        'user_id' => 1
        ]);

        $public_item_id = \App\PublicItem::where('item', '=', 'Red and Green Sweater')->pluck('id');
        DB::table('transactions')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'transaction_type' => 'BUY',
        'public_item_id' => $public_item_id,
        'user_id' => 2
        ]);
    }
}

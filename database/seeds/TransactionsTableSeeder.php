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
        DB::table('transactions')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'transaction_type' => 'BUY',
        'user_id' => 1,
        'item_id' => 1
        ]);

        DB::table('transactions')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'transaction_type' => 'BUY',
        'user_id' => 2,
        'item_id' => 2
        ]);

        DB::table('transactions')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'transaction_type' => 'BUY',
        'user_id' => 1,
        'item_id' => 3
        ]);
    }
}

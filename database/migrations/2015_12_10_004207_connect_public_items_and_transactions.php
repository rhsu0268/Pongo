<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectPublicItemsAndTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('transactions', function (Blueprint $table) {

        # Add a new INT field called `item_id` that has to be unsigned (i.e. positive)
        $table->integer('public_item_id')->unsigned();

        # This field `user_id` is a foreign key that connects to the `id` field in the `public_items` table
        $table->foreign('public_item_id')->references('id')->on('public_items');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('transactions', function (Blueprint $table) {

            # ref: http://laravel.com/docs/5.1/migrations#dropping-indexes
            $table->dropForeign('transactions_public_item_id_foreign');

            $table->dropColumn('public_item_id');
        });
    }
}

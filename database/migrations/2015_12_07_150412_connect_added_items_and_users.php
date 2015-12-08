<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectAddedItemsAndUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('added_items', function (Blueprint $table) {

        # Add a new INT field called `user_id` that has to be unsigned (i.e. positive)
        $table->integer('user_id')->unsigned();

        # This field `user_id` is a foreign key that connects to the `id` field in the `users` table
        $table->foreign('user_id')->references('id')->on('users');

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

        Schema::table('added_items', function (Blueprint $table) {

            # ref: http://laravel.com/docs/5.1/migrations#dropping-indexes
            $table->dropForeign('added_items_user_id_foreign');

            $table->dropColumn('user_id');
        });
    }
}

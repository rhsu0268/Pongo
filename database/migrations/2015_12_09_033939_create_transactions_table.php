<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transactions', function (Blueprint $table) {

        # Increments method will make a Primary, Auto-Incrementing field.
        # Most tables start off this way
        $table->increments('id');

        # This generates two columns: `created_at` and `updated_at` to
        # keep track of changes to a row
        $table->timestamps();

        # The rest of the fields...
        $table->string('transaction_type');

        # Add a new INT field called `user_id` that has to be unsigned (i.e. positive)
        $table->integer('user_id')->unsigned();

        # This field `user_id` is a foreign key that connects to the `id` field in the `users` table
        $table->foreign('user_id')->references('id')->on('users');

        # Add a new INT field called `item_id` that has to be unsigned (i.e. positive)
        $table->integer('item_id')->unsigned();

        # This field `user_id` is a foreign key that connects to the `id` field in the `public_items` table
        $table->foreign('item_id')->references('id')->on('public_items');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop the user_id foreign key
        $table->dropForeign('transactions_user_id_foreign');
        $table->dropColumn('user_id');

        // drop the item_id foreign key
        $table->dropForeign('transactions_item_id_foreign');
        $table->dropColumn('item_id');

        // drop the public_items table
        Schema::drop('transactions');
    }
}

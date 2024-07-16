<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCountryInSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            // Drop the existing 'country' column
            $table->dropColumn('country');
            
            // Add the new 'country_id' column as an integer and set up the foreign key constraint
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            // Drop the foreign key constraint and the 'country_id' column
            $table->dropForeign(['country_id']);
            $table->dropColumn('country_id');
            
            // Add the original 'country' column back
            $table->string('country');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('car_id')->nullable()->unique();
            $table->foreign('car_id')->references('id')->on('car')->onDelete('cascade');
        });

        Schema::table('transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->nullable()->unique();
            $table->foreign('customer_id')->references('id')->on('user')->onDelete('cascade');
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
    }
}

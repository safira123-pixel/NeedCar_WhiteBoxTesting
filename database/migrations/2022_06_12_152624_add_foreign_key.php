<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('car', function (Blueprint $table) {
            $table->unsignedBigInteger('merk_id')->nullable();
            $table->foreign('merk_id')->references('id')->on('merk')->onDelete('cascade');
        });

        Schema::table('transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('car_id')->nullable();
            $table->foreign('car_id')->references('id')->on('car')->onDelete('cascade');
        });

        Schema::table('transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car', function (Blueprint $table) {
            //
        });
    }
}

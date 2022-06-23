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

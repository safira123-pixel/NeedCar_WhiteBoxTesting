<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->id();
            $table->string('car_code')->unique();
            $table->string('car_name')->unique();
            $table->string('car_slug');
            $table->text('car_description');
            $table->string('car_photo')->nullable();
            $table->double('car_amount', 12, 2)->default(0);
            $table->double('car_price', 12, 2)->default(0);
            $table->string('car_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car');
    }
}

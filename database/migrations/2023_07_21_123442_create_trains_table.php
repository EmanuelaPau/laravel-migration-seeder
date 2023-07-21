<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company', 60);
            $table->string('leaving_station', 60);
            $table->string('arrival_station', 60);
            $table->dateTime('leaving_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 20);
            $table->smallInteger('number_of_carts');
            $table->boolean('in_time');
            $table->boolean('canceled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
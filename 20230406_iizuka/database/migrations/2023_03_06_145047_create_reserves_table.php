<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->id();
              $table->datetime('date')->nullable(false);
              $table->time('time')->nullable(false);
              $table->integer('number')->nullable(false);
              $table->unsignedBiginteger('users_id')->nullable(false);
              $table->foreign('users_id')->references('id')->on('users');
              $table->unsignedBiginteger('restaurants_id')->nullable(false);         
              $table->foreign('restaurants_id')->references('id')->on('restaurants');
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
        Schema::dropIfExists('reserves');
    }
}

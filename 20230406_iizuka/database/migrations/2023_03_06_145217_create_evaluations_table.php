<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->integer('point',10)->nullable(false);
            $table->longText('comment',800)->nullable();
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
        Schema::dropIfExists('evaluations');
    }
}

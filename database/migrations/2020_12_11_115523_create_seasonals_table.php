<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasonals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('flavor_id');
            $table->timestamp('start_at');
            $table->timestamp('end_at');
            $table->foreign('flavor_id')->references('id')->on('flavors');
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
        Schema::dropIfExists('seasonals');
    }
}

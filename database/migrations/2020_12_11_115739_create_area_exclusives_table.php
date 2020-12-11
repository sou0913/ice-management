<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaExclusivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_exclusives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('flavor_id');
            $table->unsignedBigInteger('area_id');
            $table->foreign('flavor_id')->references('id')->on('flavors');
            $table->foreign('area_id')->references('id')->on('areas');
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
        Schema::dropIfExists('area_exclusives');
    }
}

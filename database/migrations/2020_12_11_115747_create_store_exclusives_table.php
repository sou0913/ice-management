<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreExclusivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_exclusives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('flavor_id');
            $table->unsignedBigInteger('store_id');
            $table->foreign('flavor_id')->references('id')->on('flavors');
            $table->foreign('store_id')->references('id')->on('stores');
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
        Schema::dropIfExists('store_exclusives');
    }
}

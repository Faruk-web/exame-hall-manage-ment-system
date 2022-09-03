<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('land_name');
            $table->string('land_location');
            $table->string('land_price');
            $table->string('land_size');
            $table->string('customer_id');
            $table->string('flat_name');
            $table->string('mutation_cost');
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
        Schema::dropIfExists('lands');
    }
}

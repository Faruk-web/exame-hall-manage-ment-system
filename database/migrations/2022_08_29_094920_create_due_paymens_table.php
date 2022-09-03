<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuePaymensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('due_paymens', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id');
            $table->string('land_id');
            $table->string('land_payment');
            $table->string('mutation_payment');
            $table->string('building_id');
            $table->string('paower_attoney_payment');
            $table->string('flate_payment');
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
        Schema::dropIfExists('due_paymens');
    }
}

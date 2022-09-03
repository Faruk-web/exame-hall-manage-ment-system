<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id');
            $table->string('flat_name');
            $table->string('booking_money');
            $table->string('down_payment');
            $table->string('installment_name');
            $table->string('payment_installment');
            $table->string('othaer_payment');
            $table->string('full_payment');
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
        Schema::dropIfExists('registrations');
    }
}

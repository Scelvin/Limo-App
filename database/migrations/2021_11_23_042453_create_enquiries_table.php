<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('datetime');
            $table->string('location');
            $table->unsignedBigInteger('limo_id');
            $table->foreign('limo_id')->references('id')->on('limos');
            $table->unsignedBigInteger('service_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('client_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->integer('passengers');
            $table->string('reason');
            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->enum('status', ['cancelled','pending','confirmed'])->default('pending');
            $table->string('airline');
            $table->string('flight_number');
            $table->time('flight_time');
            $table->string('terminal');
            $table->unsignedBigInteger('payment_detail_id');
            $table->foreign('payment_detail_id')->references('id')->on('payment_details');
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
        Schema::dropIfExists('enquiries');
    }
}

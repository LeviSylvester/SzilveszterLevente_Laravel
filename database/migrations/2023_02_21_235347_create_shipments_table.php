<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_client');
            $table->unsignedBigInteger('to_client');
            $table->integer('size');
            $table->integer('weight');
            $table->enum('category', ['dental', 'documents', 'food', 'special', 'flowers', 'electronics', 'shopping']);
            $table->enum('urgency', ['extraUrgent', 'sameDay', 'notUrgent']);
            $table->double('price');
            $table->enum('status', ['waitingPickup', 'waitingDelivery', 'delivered']);
            $table->timestamps();

            $table->foreign('from_client')->references('id')->on('utilizatori');
            $table->foreign('to_client')->references('id')->on('utilizatori');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
};

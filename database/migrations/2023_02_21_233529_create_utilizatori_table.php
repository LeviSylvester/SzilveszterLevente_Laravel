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
        Schema::create('utilizatori', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('fullname');
            $table->string('password');
            $table->string('phonenumber');
            $table->string('address');
            $table->enum('type', ['admin', 'courier', 'client']);
            $table->rememberToken();
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
        Schema::dropIfExists('utilizatori');
    }
};

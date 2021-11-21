<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travellers', function (Blueprint $table) {
            $table->id();
            $table->string('email', 180);
            $table->string('username', 180);
            $table->string('mobile', 16);
            $table->string('firstname', 150);
            $table->string('lastname', 120);
            $table->string('gender', 10);
            $table->string('doorno', '20');
            $table->string('streetname', 50);
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('country', 50);
            $table->string('pincode', 8);
            $table->string('degree', 50);
            $table->string('branch', 50);
            $table->string('college_id_card', 180);
            $table->string('passedout', 20);
            $table->string('password', 255);
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
        Schema::dropIfExists('travellers');
    }
}

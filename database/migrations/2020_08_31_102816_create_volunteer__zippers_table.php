<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolunteerZippersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer__zippers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('zipper_name')->nullable();
            $table->integer('phone_number')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('volunteer__zippers');
    }
}

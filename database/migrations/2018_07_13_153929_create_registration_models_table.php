<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cms_userid');
            $table->string('firstname',50);
            $table->string('middlename',50);
            $table->string('lastname',50);
            $table->string('address',300);
            $table->string('country',100);
            $table->string('mobile',20);
            $table->string('course',50);
            $table->string('batch',50);
            $table->string('membership',50);
            $table->string('profile',50);
            $table->string('level',50);
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
        Schema::dropIfExists('registration_models');
    }
}

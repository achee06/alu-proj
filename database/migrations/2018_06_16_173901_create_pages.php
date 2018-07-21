<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title',100);
            $table->longText('content');
            $table->enum('placement', ['Navbar', 'Footer','Sidebar','Sidebar Content']);
            $table->tinyinteger('parent_page_id');
            $table->string('slug');
            $table->enum('active', ['Yes', 'No']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}

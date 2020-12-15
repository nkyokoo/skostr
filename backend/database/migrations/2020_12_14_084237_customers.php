<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('age');
            $table->string('gender');
            $table->bigInteger('idshoesizes')->unsigned()->unique();
            $table->timestamps();
            $table->foreign('idshoesizes')->references('idshoesizes')->on('shoesizes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailhostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailhostings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->float('cost');
            $table->string('details_one');
            $table->string('details_two');
            $table->string('details_three');
            $table->string('details_four');
            $table->string('details_five');
            $table->string('details_six');
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
        Schema::dropIfExists('emailhostings');
    }
}

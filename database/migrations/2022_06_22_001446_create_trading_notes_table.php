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
        Schema::create('trading_notes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('taxes');
            $table->bigInteger('stockbroker_id')->unsigned();
            $table->timestamps();

            $table->foreign('stockbroker_id')->references('id')->on('stockbrokers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trading_notes');
    }
};

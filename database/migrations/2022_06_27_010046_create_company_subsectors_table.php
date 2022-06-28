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
        Schema::create('company_subsectors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sector_id')->unsigned();
            $table->string('name');
            $table->timestamps();

            $table->foreign('sector_id')->references('id')->on('company_sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_subsectors');
    }
};

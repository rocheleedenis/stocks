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
        Schema::create('company_segments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subsector_id')->unsigned();
            $table->string('name');
            $table->timestamps();

            $table->foreign('subsector_id')->references('id')->on('company_subsectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_segments');
    }
};

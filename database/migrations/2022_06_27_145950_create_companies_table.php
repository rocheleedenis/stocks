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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sector_id')->unsigned();
            $table->bigInteger('subsector_id')->unsigned();
            $table->string('name');
            $table->string('cnpj')->unique();
            $table->string('full_name');
            $table->string('subsector');
            $table->timestamps();

            $table->foreign('sector_id')->references('id')->on('company_sectors');
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
        Schema::dropIfExists('companies');
    }
};

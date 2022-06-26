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
        Schema::create('investment_funds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fund_manager_id')->unsigned();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('cnpj')->unique();
            $table->string('type');
            $table->string('segment');
            $table->timestamps();

            $table->foreign('fund_manager_id')->references('id')->on('fund_managers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investment_funds');
    }
};

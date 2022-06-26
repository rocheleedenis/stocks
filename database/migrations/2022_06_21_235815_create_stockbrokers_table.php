<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() : void
    {
        Schema::create('stockbrokers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('full_name');
            $table->string('cnpj')->unique();
            $table->timestamps();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('stockbrokers');
    }
};

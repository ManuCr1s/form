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
        Schema::create('persons', function (Blueprint $table) {
            $table->id('id_person');
            $table->string('numero',20);
            $table->string('email',30);
            $table->string('phone',20);
            $table->string('name',200);
            $table->string('lastname',200);
            $table->unsignedBigInteger('id_region');
            $table->unsignedBigInteger('id_province');
            $table->unsignedBigInteger('id_district');  
            $table->dateTime('created_at', $precision = 3);
            $table->dateTime('updated_at', $precision = 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
};

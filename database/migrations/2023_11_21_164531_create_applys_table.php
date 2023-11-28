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
        Schema::create('applys', function (Blueprint $table) {
            $table->id('id_apply');
            $table->unsignedBigInteger('id_person');
            $table->unsignedBigInteger('id_status');
            $table->unsignedBigInteger('id_delivery');
            $table->unsignedBigInteger('id_document');
            $table->unsignedBigInteger('id_office');
            $table->string('description',200);
            $table->string('observation',200);
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
        Schema::dropIfExists('applys');
    }
};

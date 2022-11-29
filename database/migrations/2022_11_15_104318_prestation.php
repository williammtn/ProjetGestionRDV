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
        Schema::create('prestations', function (Blueprint $tableprestation) {
            $tableprestation->id();
            $tableprestation->text('description');
            $tableprestation->text('complement');
            $tableprestation->integer('prix');
            $tableprestation->integer('temps');
            $tableprestation->boolean('reservable');
            $tableprestation->rememberToken();
            $tableprestation->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestations');
    }
};

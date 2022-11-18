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
            $tableprestation->integer('prix');
            $tableprestation->integer('temps');
            $tableprestation->unsignedBigInteger('idforfait');
            $tableprestation->foreign('idforfait')
                            ->references('id')
                            ->on('forfait')
                            ->onDelete('cascade');   
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

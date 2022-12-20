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
        Schema::create('forfaits', function (Blueprint $tableforfait) {
            $tableforfait->id();
            $tableforfait->text('description');
            $tableforfait->text('complement');
            $tableforfait->integer('prix');
            $tableforfait->integer('temps');
            $tableforfait->boolean('reservable');

            // $tableforfait->unsignedBigInteger('idprestation');
            // $tableforfait->unsignedBigInteger('idsection');

            // // $tableforfait->foreign('idprestation')
            // //                 ->references('id')
            // //                 ->on('prestations')
            // //                 ->onDelete('cascade');
            // $tableforfait->foreign('idsection')
            //                 ->references('id')
            //                 ->on('sections')
            //                 ->onDelete('cascade');

            $tableforfait->rememberToken();
            $tableforfait->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forfaits');
    }
};

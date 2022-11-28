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
        Schema::create('rendez_vous', function (Blueprint $tablerdv) {
            $tablerdv->id();
            $tablerdv->date('daterdv');
            $tablerdv->time('heurerdv');
            $tablerdv->unsignedBigInteger('idforfait');
            $tablerdv->foreign('idforfait')
                            ->references('id')
                            ->on('forfaits')
                            ->onDelete('cascade');
            $tablerdv->rememberToken();
            $tablerdv->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendez_vous');
    }
};

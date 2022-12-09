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
        Schema::create('reserva', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedBigInteger('user_id');
            $table->integer('id_plan')->unsigned();
            $table->integer('domo_id')->unsigned();
            $table->double('pagoparcial');
            $table->double('totalpagoparcial');
            $table->date('fechareserva');
            $table->date('fechainicio');
            $table->date('fechafinal');
            $table->date('fechapagoparcial');
            $table->double('totalservicio');
            $table->double('pagoadicional');
            $table->enum('estado',[1,2,3]);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('NO ACTION')
            ->onUpdate('NO ACTION');
            $table->foreign('id_plan')->references('id')->on('plan')->onDelete('NO ACTION')
            ->onUpdate('NO ACTION');
            $table->foreign('domo_id')->references('id')->on('domo')->onDelete('NO ACTION')
            ->onUpdate('NO ACTION');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
};
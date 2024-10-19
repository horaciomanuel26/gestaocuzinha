<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entrega_idas', function (Blueprint $table) {
            $table->id();
            $table->string('vc_responsavel');
            $table->integer('it_marmitas');
            $table->date('dt_data');
            $table->time('tm_hora');

            $table->unsignedBigInteger('it_id_turno');
            $table->foreign('it_id_turno')->references('id')->on('turnos')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->unsignedBigInteger('it_id_prato');
            $table->foreign('it_id_prato')->references('id')->on('pratos')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrega_idas');
    }
};

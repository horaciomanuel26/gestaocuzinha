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
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('vc_nome');
            $table->string('vc_telefone');
            
            $table->unsignedBigInteger('it_id_posto');
            $table->foreign('it_id_posto')->references('id')->on('postos')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};

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
        Schema::create('postos', function (Blueprint $table) {
            $table->id();
            $table->string('vc_nome');
            $table->string('vc_telefone');
            $table->string('vc_email')->nullable();
            $table->string('vc_endereco');

            $table->unsignedBigInteger('it_id_cliete');
            $table->foreign('it_id_cliete')->references('id')->on('clientes')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->softDeletes();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postos');
    }
};

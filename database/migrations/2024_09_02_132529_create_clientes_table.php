<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('vc_nome');
        $table->string('vc_telefone');
        $table->string('vc_email');
        $table->string('vc_nif');
        $table->integer('it_valor_mensal');
        $table->softDeletes();
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

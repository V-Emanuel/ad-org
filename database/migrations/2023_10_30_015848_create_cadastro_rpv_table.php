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
        Schema::create('cadastro_rpv', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('resumo');
            $table->decimal('valor', 10, 2);
            $table->string('observacao');
            $table->json('conteudo');
            $table->unsignedBigInteger('rpvId');
            $table->unsignedBigInteger('rpvPagamentoId');
            $table->foreign('rpvId')->references('id')->on('rpvs');
            $table->foreign('rpvPagamentoId')->references('id')->on('rpvs_pagamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_rpv');
    }
};

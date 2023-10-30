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
        Schema::create('depesas_variaveis', function (Blueprint $table) {
            $table->id();
            $table->string('resumo');
            $table->decimal('valor', 10, 2);
            $table->string('observacao');
            $table->decimal('balanco', 10, 2);
            $table->unsignedBigInteger('tipoPagamentoId');
            $table->foreign('tipoPagamentoId')->references('id')->on('tipos_pagamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depesas_variaveis');
    }
};

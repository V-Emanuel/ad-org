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
        Schema::create('entradas_saidas', function (Blueprint $table) {
            $table->id();
            $table->decimal('valorTotal', 10, 2);
            $table->string('observacao');
            $table->unsignedBigInteger('statusSaldoId');
            $table->foreign('statusSaldoId')->references('id')->on('status_saldo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas_saidas');
    }
};

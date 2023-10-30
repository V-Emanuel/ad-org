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
        Schema::create('investimentos', function (Blueprint $table) {
            $table->id();
            $table->string('corretora');
            $table->decimal('valorTotal', 10, 2);
            $table->string('observacao');
            $table->unsignedBigInteger('tipoInvestimentoId');
            $table->foreign('tipoInvestimentoId')->references('id')->on('tipos_investimento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investimentos');
    }
};

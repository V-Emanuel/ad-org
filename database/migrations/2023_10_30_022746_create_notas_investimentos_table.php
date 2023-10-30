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
        Schema::create('notas_investimentos', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor', 10, 2);
            $table->string('observacao');
            $table->unsignedBigInteger('investimentoId');
            $table->foreign('investimentoId')->references('id')->on('investimentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas_investimentos');
    }
};

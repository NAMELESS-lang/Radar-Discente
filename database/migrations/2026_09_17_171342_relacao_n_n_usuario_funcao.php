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
        Schema::create('usuario_funcoes', function (Blueprint $table) {
            $table->foreignId('id_usuario')->constrained('usuarios','id_usuario');
            $table->foreignId('id_funcao')->constrained('funcoes','id_funcao');
            $table->primary(['id_usuario','id_funcao']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_funcoes');
    }
};

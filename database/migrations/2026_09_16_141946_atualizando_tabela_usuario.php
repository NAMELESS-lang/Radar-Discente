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
        Schema::rename('users','usuarios');
        Schema::table('usuarios', function (Blueprint $table) {
            $table->renameColumn('id', 'id_usuario');
            $table->renameColumn('name', 'nome');
            $table->renameColumn('password', 'senha');
            $table->foreignId('id_instituicao_ensino')->constrained('instituicao_ensino', 'id_instituicao_ensino');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('usuarios','users');
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('id_usuario', 'id');
            $table->renameColumn('nome', 'name');
            $table->renameColumn('senha', 'password');
            $table->dropColumn('id_instituicao_ensino');
        });
    }
};

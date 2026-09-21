<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Funcoes extends Model
{
    // Representa o relacionamento N:N, várias funções são exercidas por vários usuários
    // A tabela do relacionamento N:N é usuario_funcoes
    public function Usuarios(): belongsToMany
    {
        return $this->belongsToMany(Usuario::class, 'usuario_funcoes');
    }
}

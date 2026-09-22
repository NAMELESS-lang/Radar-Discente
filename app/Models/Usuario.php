<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class Usuario extends Model
{

    protected $primaryKey = 'id_usuario';

    // Representa o relacionamento N:N, vários usuários exercem várias funções
    // A tabela do relacionamento N:N é usuario_funcoes
    public function Funcoes(): belongsToMany
    {
        return $this->belongsToMany(Funcoes::class, 'usuario_funcoes');
    }
}

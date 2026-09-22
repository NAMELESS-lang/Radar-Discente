<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsToMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    protected $primaryKey = 'id_usuario';

    // Representa o relacionamento N:N, vários usuários exercem várias funções
    // A tabela do relacionamento N:N é usuario_funcoes
    public function Funcoes(): belongsToMany
    {
        return $this->belongsToMany(Funcoes::class, 'usuario_funcoes');
    }

    // Representa o relacionamento 1:N. Uma instituição de ensino possui vários alunos
    public function instituicaoEnsino():belongsTo
    {
        return $this->belongsTo(InstituicaoEnsino::class, 'id_instituicao_ensino','id_instituicao_ensino');
    }

    public function Observacao(): HasMany{
        return $this->HasMany(Observacao::class);
    }
}

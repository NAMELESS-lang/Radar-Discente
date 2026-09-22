<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Turma extends Model
{
    protected $primaryKey = 'id_turma';

    // Define o relacionamento 1:N. Várias turmas pertencem a um curso
    public function Curso(): belongsTo
    {
        return $this->belongsTo(Curso::class,'id_curso','id_curso');
    }

    // Representa o 1:1 entre usuario e turma. Um usuário é conselheiro de uma turma
    public function Conselheiro(): belongsTo
    {
        return $this->belongsTo(Usuario::class,'id_conselheiro','id_usuario');
    }

    // Representa o 1:N entre instituição e turma. Uma instituicao tem várias turmas
    public function instituicaoEnsino():belongsTo
    {
        return $this->belongsTo(InstituicaoEnsino::class, 'id_instituicao_ensino');
    }

    // Representa relacionamento 1:N. Uma turma possui vários alunos
    public function Alunos():HasMany
    {
        return $this->hasMany(Aluno::class, 'id_aluno');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

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

    public function instituicaoEnsino(){
        return $this->belongsTo(Instituicao::class, 'id_instituicao_ensino');
    }
}

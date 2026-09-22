<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Aluno extends Model
{
    protected $primaryKey = 'id_aluno';

     // Representa a relação 1:N. Uma turma possui vários alunos
    public function Turma(): belongsTo
    {
        return $this->belongsTo(Turma::class,'id_turma','id_turma');
    }
}

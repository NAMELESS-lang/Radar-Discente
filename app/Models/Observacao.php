<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Observacao extends Model
{
    protected $primaryKey = 'id_observacao';

    // Define o relacionamento 1:N. Várias observações pertencem a um aluno
    public function Aluno(): belongsTo
    {
        return $this->belongsTo(Aluno::class, 'id_aluno','id_aluno');
    }

    // Define o relacionamento 1:N. Várias observações são feitas por um usuario
    public function Usuario(): belongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_usuario','id_usuario');
    }
}

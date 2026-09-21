<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
class Turma extends Model
{
    // Define o relacionamento 1:N. Várias turmas pertencem a um curso
    public function Curso(): belongsTo
    {
        return $this->belongsTo(Curso::class);
    }
}

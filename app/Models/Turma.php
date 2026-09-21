<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Turma extends Model
{
    // Define o relacionamento 1:N. Várias turmas pertencem a um curso
    public function Curso(): HasOne
    {
        return $this->hasOne(Curso::class);
    }
}

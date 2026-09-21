<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Curso extends Model
{
    // Representa 1:N com Instituicao. Vários cursos pertencem a uma Instituicao
    public function Instituicao(): belongsTo
    {
        return $this->belongsTo(Instituicao::class);
    }


     // Representa a relação 1:N. Um curso possui várias turmas
    public function Turmas(): HasMany
    {
        return $this->hasMany(Turma::class);
    }
}

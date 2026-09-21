<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Curso extends Model
{
    // Representa 1:N com Instituicao. Vários cursos pertencem a uma Instituicao
    public function Instituicao(): HasOne
    {
        return $this->hasOne(Instituicao::class);
    }


     // Representa a relação 1:N. Uma instituição possui vários cursos
    public function Turmas(): HasMany
    {
        return $this->hasMany(Turma::class);
    }
}

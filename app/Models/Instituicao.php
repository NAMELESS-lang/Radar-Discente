<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instituicao extends Model
{

    protected $primaryKey = 'id_instituicao_ensino';

    // Representa a relação 1:N. Uma instituição possui vários cursos
    public function Cursos(): HasMany
    {
        return $this->hasMany(Curso::class);
    }


    // Representa a relação 1:N. Uma instituição possui vários usuários
    public function Usuarios(): HasMany
    {
        return $this->hasMany(Usuario::class);
    }
}

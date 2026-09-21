<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Curso extends Model
{

     // Representa a relação 1:N. Um curso possui várias turmas
    public function Turmas(): HasMany
    {
        return $this->hasMany(Turma::class);
    }


    // Representa o 1:1. Um usuário coordena um curso
    public function Coordenador(): belongsTo
    {
        return $this->belongsTo(Usuario::class, 'id_coordenador','id_usuario');
    }
}

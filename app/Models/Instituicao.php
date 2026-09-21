<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instituicao extends Model
{
    // Representa a relação 1:N. Uma instituição possui vários usuários
    public function comments(): HasMany
    {
        return $this->hasMany(Usuario::class);
    }
}

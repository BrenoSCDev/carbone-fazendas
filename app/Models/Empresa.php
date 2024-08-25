<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class, 'empresa_id', 'id');
    }

    public function fazendas()
    {
        return $this->hasMany(Fazenda::class, 'empresa_id', 'id');
    }
}

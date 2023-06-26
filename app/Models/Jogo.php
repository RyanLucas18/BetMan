<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $fillable = ['time_casa', 'time_visitante', 'data'];
    
    // Relacionamento com as apostas
    public function apostas()
    {
        return $this->hasMany(Aposta::class);
    }
}

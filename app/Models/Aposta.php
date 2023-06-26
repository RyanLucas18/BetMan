<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aposta extends Model
{
    protected $fillable = [
        'jogo_id',
        'resultado',
        'valor',
    ];

    // Relacionamento com o modelo Jogo
    public function jogo()
    {
        return $this->belongsTo(Jogo::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooler extends Model
{
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'descricao',
        'tamanho'
    ];

    public function processadores()
    {
        return $this->belongsToMany(Processador::class);
    }
}

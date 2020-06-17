<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gabinete extends Model
{
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'descricao',
        'tamanhoPlacaMae'
    ];

    public function placaMaes()
    {
        return $this->belongsToMany(PlacaMae::class);
    }

    public function fontes()
    {
        return $this->belongsToMany(Fonte::class);
    }
}

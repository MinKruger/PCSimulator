<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlacaVideo extends Model
{
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'descricao',
        'tamanho',
        'memoria',
        'frequencia'
    ];

    public function placaMaes()
    {
        return $this->belongsToMany(PlacaMae::class);
    }
}

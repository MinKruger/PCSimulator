<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processador extends Model
{
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'descricao',
        'nucleos',
        'frequencia'
    ];

    public function coolers()
    {
        return $this->belongsToMany(Cooler::class);
    }

    public function placaMaes()
    {
        return $this->belongsToMany(PlacaMae::class);
    }
}

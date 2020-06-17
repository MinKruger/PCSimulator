<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RAM extends Model
{
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'descricao',
        'frequencia',
        'armazenamento'
    ];

    public function placaMaes()
    {
        return $this->belongsToMany(PlacaMae::class);
    }
}

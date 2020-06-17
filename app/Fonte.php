<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fonte extends Model
{
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'descricao',
        'certificacao'
    ];

    public function gabinetes()
    {
        return $this->belongsToMany(Gabinete::class);
    }
}

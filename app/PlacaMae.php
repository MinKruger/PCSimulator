<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlacaMae extends Model
{
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'descricao',
        'chipset'
    ];

    public function processadores()
    {
        return $this->belongsToMany(Processador::class);
    }

    public function rams()
    {
        return $this->belongsToMany(RAM::class);
    }

    public function roms()
    {
        return $this->belongsToMany(ROM::class);
    }

    public function placaVideos()
    {
        return $this->belongsToMany(PlacaVideo::class);
    }

    public function gabinetes()
    {
        return $this->belongsToMany(Gabinete::class);
    }
}

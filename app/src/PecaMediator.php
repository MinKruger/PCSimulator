<?php

namespace App\src;

use Illuminate\Support\Collection;

abstract class PecaMediator
{
    private $peca;

    protected function __construct($peca)
    {
        $this->peca = $peca;
    }

    function returnCompativel()
    {
        return $this->peca;
    }
}
<?php

namespace Renan;

class Imposto
{
    public function calcular(float $valor):float
    {
        if ($valor > 500) {
            return $valor * .25;
        }

        return 0;
    }
}

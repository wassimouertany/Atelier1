<?php

namespace App\taxes;

class Calculateur
{
    function prixTVA($prix):float{
        $mtTVA = $prix * 0.2;
        return $mtTVA;
    }

    function prixTTC($prix):float{
        $mtTTC = $prix * 1.2;
        return $mtTTC;
    }
}
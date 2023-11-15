<?php

namespace App\Service;

use App\Character\Character;

interface CalculoExperienciaInterface
{
    public function addExp(Character $ganador, int $nivelEnemigo): void;
}
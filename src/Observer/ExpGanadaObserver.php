<?php

namespace App\Observer;

use App\FightResult;
use App\Service\CalculoExperiencia;

class ExpGanadaObserver implements GameObserverInterface
{

    public function __construct(private readonly CalculoExperiencia $calculoExperiencia)
    {

    }

    public function cuandoTerminaPelea(FightResult $fightResult): void
    {
        $ganador = $fightResult->getWinner();
        $perdedor = $fightResult->getLoser();

        $this->calculoExperiencia->addExp($ganador, $perdedor->getLevel());
    }
}
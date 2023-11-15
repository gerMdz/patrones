<?php

namespace App\Observer;

use App\FightResult;
use App\Service\CalculoExperienciaInterface;

class ExpGanadaObserver implements GameObserverInterface
{

    public function __construct(private readonly CalculoExperienciaInterface $calculoExperiencia)
    {

    }

    public function cuandoTerminaPelea(FightResult $fightResult): void
    {
        $ganador = $fightResult->getWinner();
        $perdedor = $fightResult->getLoser();

        $this->calculoExperiencia->addExp($ganador, $perdedor->getLevel());
    }
}
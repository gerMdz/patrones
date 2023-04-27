<?php

namespace App\Observer;

use App\FightResult;

interface GameObserverInterface
{
    public function cuandoTerminaPelea(FightResult $fightResult):void;
}
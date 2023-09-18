<?php

namespace App\Event;

use App\Character\Character;

class FightStartEvent
{
    public function __construct(public Character $player, public Character $ai)
    {
    }
}
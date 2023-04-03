<?php

namespace App\ArmorType;

use App\Dice;

class IceBlockType implements ArmorType
{

    public function getArmorReduction(int $damage): int
    {
        return Dice::roll(8) +  Dice::roll(8);
    }
}
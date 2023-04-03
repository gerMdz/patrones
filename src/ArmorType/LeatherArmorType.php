<?php

namespace App\ArmorType;

class LeatherArmorType implements ArmorType
{

    public function getArmorReduction(int $damage): int
    {
        return floor($damage * 0.25);
    }
}
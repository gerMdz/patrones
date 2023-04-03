<?php

namespace App\AttackType;

class MultiAttackType implements AttackType
{

    /**
     * @param AttackType[] $attaxkTypes
     */
    public function __construct(private array $attaxkTypes)
    {
        
    }
    
    public function performAttack(int $baseDamage): int
    {
        $type = $this->attaxkTypes[array_rand($this->attaxkTypes)];

        return $type->performAttack($baseDamage);
    }
}
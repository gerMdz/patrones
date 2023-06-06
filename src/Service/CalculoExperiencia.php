<?php

namespace App\Service;

use App\Character\Character;

class CalculoExperiencia
{
    public function addExp(Character $ganador, int $nivelEnemigo): void
    {
        $xpEarned = $this->calcularExperienciaGanada($ganador->getLevel(), $nivelEnemigo);

        $totalXp = $ganador->addXp($xpEarned);

        $expParaSiguienteNivel = $this->getExpParaSiguienteNivel($ganador->getLevel());
        if ($totalXp >= $expParaSiguienteNivel) {
            $ganador->levelUp();
        }
    }

    private function calcularExperienciaGanada(int $nivelGanador, int $nivelPerdedor): int
    {
        $baseXp = 25;
        $expBruta = $baseXp * $nivelPerdedor;

        $diferenciaNivel = $nivelGanador - $nivelPerdedor;
        return match (true) {
            $diferenciaNivel === 0 => $expBruta,

            // La experiencia ganada depende del nivel del oponente
            // Menos experiencia menos puntos
            $diferenciaNivel > 0 => $expBruta - floor($nivelPerdedor * 0.18),

            // Más experiencia más puntos
            $diferenciaNivel < 0 => $expBruta + floor($nivelPerdedor * 0.18),
        };
    }

    private function getExpParaSiguienteNivel(int $nivelActual): int
    {
        $baseXp = 100;
        $expNecesariaParaNivelActualForCurrentLvl = $this->fibonacciProgressionFormula($baseXp, $nivelActual);
        $expNecesariaParaSiguienteNivel = $this->fibonacciProgressionFormula($baseXp, $nivelActual + 1);

        // Dado que el personaje tiene la cantidad total de XP ganada, debemos incluir
        // la XP necesaria para el nivel actual.
        return $expNecesariaParaNivelActualForCurrentLvl + $expNecesariaParaSiguienteNivel;
    }

    private function fibonacciProgressionFormula(int $baseXp, int $nivelActual): int
    {
        $nivelActual--;
        if ($nivelActual === 0) {
            return 0;
        }

        return $baseXp * ($nivelActual-1) + ($baseXp * ($nivelActual));
    }
}

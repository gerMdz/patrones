<?php

namespace App\Service;

use App\Character\Character;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\DependencyInjection\Attribute\AsDecorator;

#[AsDecorator(CalculoExperienciaInterface::class)]
class OutputtingExperienciaCalculo implements CalculoExperienciaInterface
{
        public function __construct(
            private readonly CalculoExperienciaInterface $innerCalculo
        )
        {
        }

    public function addExp(Character $ganador, int $nivelEnemigo): void
    {
        $nivelAnterior = $ganador->getLevel();
        $this->innerCalculo->addExp($ganador, $nivelEnemigo);

        $nivelPosterior = $ganador->getLevel();

        if($nivelPosterior > $nivelAnterior){
            $salida = new ConsoleOutput();

            $salida->writeln('--------------------------------');
            $salida->writeln('<bg=green;fg=white>¡Felicitaciones! ¡Hás subido de nivel!</>');
            $salida->writeln(sprintf('Ahora tienes el nivel "%d"', $ganador->getLevel()));
            $salida->writeln('--------------------------------');
        }
    }
}
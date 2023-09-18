<?php

namespace App\Subscriber;

use App\Event\FightStartEvent;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class OutputFightStartingSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            FightStartEvent::class => 'onFightStart'
        ];
    }

    /**
     * @param FightStartEvent $event
     * @return void
     */
    public function onFightStart(FightStartEvent $event):void
    {
        $io = new SymfonyStyle(new ArrayInput([]), new ConsoleOutput());
        $io->note('La pelea comenzó otra vez ' .$event->ai->getNickname());
    }
}
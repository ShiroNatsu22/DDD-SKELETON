<?php

namespace Skeleton\Shared\Infrastructure\Event;

use Skeleton\Shared\Domain\Bus\Event\DomainEvent;
use Skeleton\Shared\Domain\Bus\Event\InMemoryEventBus as InMemoryEventBusInterface;

class InMemoryEventBus implements InMemoryEventBusInterface
{

    public function publish(DomainEvent ...$events): void
    {
        //TODO metodos guardar BBDD
    }
}
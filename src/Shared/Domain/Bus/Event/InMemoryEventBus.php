<?php

declare(strict_types=1);

namespace Skeleton\Shared\Domain\Bus\Event;

interface InMemoryEventBus extends Doctrine
{
    public function publish(DomainEvent ...$events): void;
}

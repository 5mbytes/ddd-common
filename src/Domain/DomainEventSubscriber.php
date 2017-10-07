<?php
declare(strict_types=1);

namespace DddCommon\Domain;

interface DomainEventSubscriber
{
    /** @param DomainEvent $domainEvent */
    public function handle($domainEvent);

    public function isSubscribedTo(string $eventType): bool;
}

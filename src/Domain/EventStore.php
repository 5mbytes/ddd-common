<?php
declare(strict_types=1);

namespace DddCommon\Domain;

interface EventStore
{
    public function append(DomainEvent $domainEvent);

    /**
     * @param int $eventId
     * @return StoredEvent[]
     */
    public function allStoredEventsSince(int $eventId): array;
}

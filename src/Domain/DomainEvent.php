<?php
declare(strict_types=1);

namespace DddCommon\Domain;

interface DomainEvent
{
    public function occurredOn(): \DateTimeImmutable;
}

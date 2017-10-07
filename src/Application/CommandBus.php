<?php
declare(strict_types=1);

namespace DddCommon\Application;

interface CommandBus
{
    public function subscribe(string $command, string $handler);

    public function handle($command);
}

<?php
declare(strict_types=1);

namespace DddCommon\Application;

interface Handler
{
    public function handle($command);
}

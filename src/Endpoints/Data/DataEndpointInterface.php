<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

interface DataEndpointInterface
{
    public function getDataKey(): string;
}

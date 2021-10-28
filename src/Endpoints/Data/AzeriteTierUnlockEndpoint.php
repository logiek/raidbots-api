<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class AzeriteTierUnlockEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'azerite-tier-unlock';
    }
}

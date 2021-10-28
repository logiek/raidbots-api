<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class CovenantsEndpoint extends DataEndpoint
{
    public function getDataKey(): string
    {
        return 'covenants';
    }
}

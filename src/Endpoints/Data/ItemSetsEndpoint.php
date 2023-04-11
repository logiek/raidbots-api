<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class ItemSetsEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'item-sets';
    }
}

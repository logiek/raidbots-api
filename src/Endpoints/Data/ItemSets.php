<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class ItemSets extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'item-sets';
    }
}

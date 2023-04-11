<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class ItemConversionsEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'item-conversions';
    }
}

<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class ItemCurvesEndpoint extends DataEndpoint
{
    public function getDataKey(): string
    {
        return 'item-curves';
    }
}

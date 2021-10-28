<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class ConduitRanksEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'conduit-ranks';
    }
}

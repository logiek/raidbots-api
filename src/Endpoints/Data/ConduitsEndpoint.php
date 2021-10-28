<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class ConduitsEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'conduits';
    }
}

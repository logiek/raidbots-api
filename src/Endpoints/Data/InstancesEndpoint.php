<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class InstancesEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'instances';
    }
}

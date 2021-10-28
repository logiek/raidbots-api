<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class InstancesEndpoint extends DataEndpoint
{
    public function getDataKey(): string
    {
        return 'instances';
    }
}

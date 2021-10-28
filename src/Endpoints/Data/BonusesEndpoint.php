<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class BonusesEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'bonuses';
    }
}

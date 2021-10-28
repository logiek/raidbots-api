<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class BonusesEndpoint extends DataEndpoint
{
    public function getDataKey(): string
    {
        return 'bonuses';
    }
}

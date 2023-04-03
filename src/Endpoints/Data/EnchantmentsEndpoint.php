<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class EnchantmentsEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'enchantments';
    }
}

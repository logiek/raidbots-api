<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class CraftingEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'crafting';
    }
}

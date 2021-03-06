<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class EquippableItemsEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'equippable-items';
    }
}

<?php

declare(strict_types=1);

namespace Logiek\Raidbots\Endpoints\Data;

class ItemLimitCategoriesEndpoint extends DataEndpoint
{
    protected function getDataKey(): string
    {
        return 'item-limit-categories';
    }
}

<?php

declare(strict_types=1);

namespace Logiek\Raidbots;

use Logiek\Raidbots\Endpoints\Data\AzeritePowerSetsEndpoint;
use Logiek\Raidbots\Endpoints\Data\AzeriteTierUnlockEndpoint;
use Logiek\Raidbots\Endpoints\Data\BonusesEndpoint;
use Logiek\Raidbots\Endpoints\Data\ConduitRanksEndpoint;
use Logiek\Raidbots\Endpoints\Data\ConduitsEndpoint;
use Logiek\Raidbots\Endpoints\Data\CovenantsEndpoint;
use Logiek\Raidbots\Endpoints\Data\CraftingEndpoint;
use Logiek\Raidbots\Endpoints\Data\EnchantmentsEndpoint;
use Logiek\Raidbots\Endpoints\Data\EquippableItemsEndpoint;
use Logiek\Raidbots\Endpoints\Data\InstancesEndpoint;
use Logiek\Raidbots\Endpoints\Data\ItemConversionsEndpoint;
use Logiek\Raidbots\Endpoints\Data\ItemCurvesEndpoint;
use Logiek\Raidbots\Endpoints\Data\ItemLimitCategoriesEndpoint;
use Logiek\Raidbots\Endpoints\Data\ItemNamesEndpoint;
use Logiek\Raidbots\Endpoints\Data\ItemSetsEndpoint;
use Logiek\Raidbots\Endpoints\Data\LegendaryAbilitiesEndpoint;
use Logiek\Raidbots\Endpoints\Data\TalentsEndpoint;
use Logiek\Raidbots\Endpoints\ReportsEndpoint;

class Client
{
    public BonusesEndpoint $bonuses;

    public CraftingEndpoint $crafting;

    public EnchantmentsEndpoint $enchantments;

    public EquippableItemsEndpoint $equippableItems;

    public InstancesEndpoint $instances;

    public ItemConversionsEndpoint $itemConversions;

    public ItemCurvesEndpoint $itemCurves;

    public ItemLimitCategoriesEndpoint $itemLimitCategories;

    public ItemNamesEndpoint $itemNames;

    public ItemSetsEndpoint $itemSets;

    public TalentsEndpoint $talents;

    public ReportsEndpoint $reports;

    public function __construct()
    {
        $this->bonuses = new BonusesEndpoint();
        $this->crafting = new CraftingEndpoint();
        $this->enchantments = new EnchantmentsEndpoint();
        $this->equippableItems = new EquippableItemsEndpoint();
        $this->instances = new InstancesEndpoint();
        $this->itemConversions = new ItemConversionsEndpoint();
        $this->itemCurves = new ItemCurvesEndpoint();
        $this->itemLimitCategories = new ItemLimitCategoriesEndpoint();
        $this->itemNames = new ItemNamesEndpoint();
        $this->itemSets = new ItemSetsEndpoint();
        $this->talents = new TalentsEndpoint();
        $this->reports = new ReportsEndpoint();
    }
}

<?php

declare(strict_types=1);

namespace Logiek\Raidbots;

use Logiek\Raidbots\Endpoints\Data\AzeritePowerSetsEndpoint;
use Logiek\Raidbots\Endpoints\Data\AzeriteTierUnlockEndpoint;
use Logiek\Raidbots\Endpoints\Data\BonusesEndpoint;
use Logiek\Raidbots\Endpoints\Data\ConduitRanksEndpoint;
use Logiek\Raidbots\Endpoints\Data\ConduitsEndpoint;
use Logiek\Raidbots\Endpoints\Data\CovenantsEndpoint;
use Logiek\Raidbots\Endpoints\Data\EquippableItemsEndpoint;
use Logiek\Raidbots\Endpoints\Data\InstancesEndpoint;
use Logiek\Raidbots\Endpoints\Data\ItemCurvesEndpoint;
use Logiek\Raidbots\Endpoints\Data\LegendaryAbilitiesEndpoint;
use Logiek\Raidbots\Endpoints\Data\TalentsEndpoint;
use Logiek\Raidbots\Endpoints\ReportEndpoint;

class Client
{
    public ReportEndpoint $reports;

    public AzeriteTierUnlockEndpoint $azeriteTierUnlockEndpoint;

    public AzeritePowerSetsEndpoint $azeritePowerSets;

    public ItemCurvesEndpoint $itemCurves;

    public InstancesEndpoint $instances;

    public TalentsEndpoint $talents;

    public BonusesEndpoint $bonuses;

    public LegendaryAbilitiesEndpoint $legendaryAbilities;

    public ConduitRanksEndpoint $conduitRanks;

    public ConduitsEndpoint $conduits;

    public CovenantsEndpoint $covenants;

    public EquippableItemsEndpoint $equippableItems;

    public function __construct()
    {
        $this->reports = new ReportEndpoint();
        $this->azeriteTierUnlockEndpoint = new AzeriteTierUnlockEndpoint();
        $this->azeritePowerSets = new AzeritePowerSetsEndpoint();
        $this->itemCurves = new ItemCurvesEndpoint();
        $this->instances = new InstancesEndpoint();
        $this->talents = new TalentsEndpoint();
        $this->bonuses = new BonusesEndpoint();
        $this->legendaryAbilities = new LegendaryAbilitiesEndpoint();
        $this->conduitRanks = new ConduitRanksEndpoint();
        $this->conduits = new ConduitsEndpoint();
        $this->covenants = new CovenantsEndpoint();
        $this->equippableItems = new EquippableItemsEndpoint();
    }
}

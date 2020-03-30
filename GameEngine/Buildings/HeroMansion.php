<?php


namespace Game\Buildings;


use App\Models\Building;
use DemeterChain\Main;
use Tightenco\Parental\HasParent;

final class HeroMansion extends Building
{
    use HasParent;

    /**
     * {@inheritDoc}
     * @see Building::BUILDINGS_REQUIREMENTS
     */
    public const BUILDINGS_REQUIREMENTS = [RallyPoint::class => 1, MainBuilding::class => 3];

    /**
     * {@inheritDoc}
     * @see Building::BASE_POPULATION
     */
    protected const BASE_POPULATION = 2;

    /**
     * {@inheritDoc}
     * @see Building::BASE_NEEDED_RESOURCES
     */
    protected const BASE_NEEDED_RESOURCES = [700, 670, 700, 240];

    /**
     * {@inheritDoc}
     * @see Building::BASE_NEEDED_TIME
     */
    protected const BASE_NEEDED_TIME = [4175, 1.16, 1875];

    /**
     * Get the available slots
     *
     * @return int
     */
    public function getSlotsAttribute(): int
    {
        return ($this->level >= static::MAX_LEVEL - 10) + ($this->level >= static::MAX_LEVEL - 5) + ($this->level == static::MAX_LEVEL);
    }
}

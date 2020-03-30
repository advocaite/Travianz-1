<?php


namespace Game\Buildings;


use App\Models\Building;
use Tightenco\Parental\HasParent;

final class StonemasonLodge extends Building
{
    use HasParent;

    /**
     * {@inheritDoc}
     * @see Building::BUILDINGS_REQUIREMENTS
     */
    public const BUILDINGS_REQUIREMENTS = [MainBuilding::class => 5, Palace::class => 3];

    /**
     * {@inheritDoc}
     * @see Building::BASE_POPULATION
     */
    protected const BASE_POPULATION = 2;

    /**
     * {@inheritDoc}
     * @see Building::BASE_NEEDED_RESOURCES
     */
    protected const BASE_NEEDED_RESOURCES = [155, 130, 125, 70];

    /**
     * {@inheritDoc}
     * @see Building::BASE_NEEDED_TIME
     */
    protected const BASE_NEEDED_TIME = [4075, 1.16, 1875];

    /**
     * {@inheritDoc}
     * @see Building::getBonusAttribute()
     */
    public function getBonusAttribute(): float
    {
        return array_combine(range(0, static::MAX_LEVEL), range(0, static::MAX_LEVEL * 0.1, 0.1));
    }
}

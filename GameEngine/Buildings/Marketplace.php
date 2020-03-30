<?php


namespace Game\Buildings;


use App\Models\Building;
use Tightenco\Parental\HasParent;

final class Marketplace extends Building
{
    use HasParent;

    /**
     * {@inheritDoc}
     * @see Building::BUILDINGS_REQUIREMENTS
     */
    public const BUILDINGS_REQUIREMENTS = [Warehouse::class => 1, Granary::class => 1, MainBuilding::class => 3];

    /**
     * {@inheritDoc}
     * @see Building::BASE_CULTURE_POINTS
     */
    protected const BASE_CULTURE_POINTS = 4;

    /**
     * {@inheritDoc}
     * @see Building::BASE_POPULATION
     */
    protected const BASE_POPULATION = 4;

    /**
     * {@inheritDoc}
     * @see Building::BASE_NEEDED_RESOURCES
     */
    protected const BASE_NEEDED_RESOURCES = [80, 70, 120, 70];

    /**
     * {@inheritDoc}
     * @see Building::BASE_NEEDED_TIME
     */
    protected const BASE_NEEDED_TIME = [3675, 1.16, 1875];

    /**
     * {@inheritDoc}
     * @see Building::getBonusAttribute()
     */
    public function getBonusAttribute(): int
    {
        return array_combine(range(0, static::MAX_LEVEL), range(0,  static::MAX_LEVEL * 1, 1))[$this->level] ?? 0;
    }
}

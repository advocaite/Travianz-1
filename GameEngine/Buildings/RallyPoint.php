<?php


namespace Game\Buildings;


use App\Models\Building;
use Tightenco\Parental\HasParent;

final class RallyPoint extends Building
{
    use HasParent;

    /**
     * {@inheritDoc}
     * @see Building::BASE_POPULATION
     */
    protected const BASE_POPULATION = 1;

    /**
     * {@inheritDoc}
     * @see Building::BASE_NEEDED_RESOURCES
     */
    protected const BASE_NEEDED_RESOURCES = [110, 160, 90, 70];

    /**
     * {@inheritDoc}
     * @see Building::BASE_NEEDED_TIME
     */
    protected const BASE_NEEDED_TIME = [3875, 1.16, 1875];

    /**
     * {@inheritDoc}
     * @see Building::getBonusAttribute()
     */
    public function getBonusAttribute(): array
    {
        return [
            3 => [
                3 =>
                    [
                        Warehouse::class,
                        Granary::class
                    ]
            ],
            5 => [
                1 =>
                    [
                        Woodcutter::class,
                        ClayPit::class,
                        IronMine::class,
                        Cropland::class,
                        Sawmill::class,
                        Brickyard::class,
                        IronFoundry::class,
                        GrainMill::class,
                        Bakery::class
                    ]
            ],
            10 => [
                2 =>
                    [
                        Academy::class,
                        Barracks::class,
                        Stable::class,
                        Workshop::class,
                        Armoury::class,
                        Blacksmith::class,
                        RallyPoint::class,
                        GreatBarracks::class,
                        GreatStable::class,
                        HeroMansion::class,
                        TournamentSquare::class
                    ],
                3 =>
                    [
                        Brewery::class,
                        Embassy::class,
                        HorseDrinkingTrough::class,
                        MainBuilding::class,
                        Marketplace::class,
                        Palace::class,
                        Residence::class,
                        TownHall::class,
                        TradeOffice::class,
                        Treasury::class,
                        WorldWonder::class
                    ]
            ]
        ];
    }
}

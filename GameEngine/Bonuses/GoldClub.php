<?php


namespace Game\Bonuses;

use App\Models\Bonus;
use Tightenco\Parental\HasParent;

final class GoldClub extends Bonus
{
    use HasParent;

    /**
     * {@inheritDoc}
     * @see Bonus::BASE_DURATION()
     */
    public const BASE_DURATION = INF;

    /**
     * {@inheritDoc}
     * @see Bonus::isActive()
     */
    public function isActive(): bool
    {
        return true;
    }
}

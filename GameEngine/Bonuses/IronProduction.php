<?php


namespace Game\Bonuses;

use Game\Resources\Iron;
use App\Models\Bonus;
use Tightenco\Parental\HasParent;

final class IronProduction extends Bonus
{
    use HasParent;

    /**
     * Indicates the boosted resource.
     *
     * @var string
     */
    public const BOOSTED_RESOURCE = Iron::class;

    /**
     * {@inheritDoc}
     * @see Bonus::getBonusAttribute()
     */
    public function getBonusAttribute(): float
    {
        return config('game-settings.bonuses.production.iron');
    }
}

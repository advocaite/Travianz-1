<?php


namespace Game\Bonuses;

use Game\Resources\Crop;
use App\Models\Bonus;
use Tightenco\Parental\HasParent;

final class CropProduction extends Bonus
{
    use HasParent;

    /**
     * Indicates the boosted resource.
     *
     * @var string
     */
    public const BOOSTED_RESOURCE = Crop::class;

    /**
     * {@inheritDoc}
     * @see Bonus::getBonusAttribute()
     */
    public function getBonusAttribute(): float
    {
        return config('game-settings.bonuses.production.crop');
    }
}

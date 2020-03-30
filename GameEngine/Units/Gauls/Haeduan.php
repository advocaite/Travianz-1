<?php


namespace Game\Units\Gauls;


use App\Enums\UnitKindEnums;
use App\Enums\UnitCategoryEnums;
use Game\Buildings\Academy;
use Game\Buildings\Stable;
use App\Models\Unit;

final class Haeduan extends Unit
{
    /**
     * {@inheritDoc}
     * @see Unit::ATTACK
     */
    public const ATTACK = 140;

    /**
     * {@inheritDoc}
     * @see Unit::INFANTRY_DEFENSE
     */
    public const INFANTRY_DEFENSE = 50;

    /**
     * {@inheritDoc}
     * @see Unit::CAVALRY_DEFENSE
     */
    public const CAVALRY_DEFENSE = 165;

    /**
     * {@inheritDoc}
     * @see Unit::SPEED
     */
    public const SPEED = 13;

    /**
     * {@inheritDoc}
     * @see Unit::CAPACITY
     */
    public const CAPACITY = 65;

    /**
     * {@inheritDoc}
     * @see Unit::UPKEEP
     */
    public const UPKEEP = 3;

    /**
     * {@inheritDoc}
     * @see Unit::TRAIN_NEEDED_TIME
     */
    public const TRAIN_NEEDED_TIME = 3900;

    /**
     * {@inheritDoc}
     * @see Unit::RESEARCH_REQUIREMENTS
     */
    public const RESEARCH_REQUIREMENTS = [Academy::class => 15, Stable::class => 10];

    /**
     * {@inheritDoc}
     * @see Unit::KIND
     */
    public const CATEGORY = UnitCategoryEnums::CAVALRY;

    /**
     * {@inheritDoc}
     * @see Unit::CATEGORY
     */
    public const KIND = UnitKindEnums::NONE;

    /**
     * {@inheritDoc}
     * @see Unit::TRAIN_NEEDED_RESOURCES
     */
    protected const TRAIN_NEEDED_RESOURCES = [500, 620, 675, 170];
}

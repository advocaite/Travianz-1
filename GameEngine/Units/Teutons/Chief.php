<?php


namespace Game\Units\Teutons;


use App\Enums\UnitKindEnums;
use App\Enums\UnitCategoryEnums;
use Game\Buildings\Academy;
use Game\Buildings\RallyPoint;
use App\Models\Unit;

final class Chief extends Unit
{
    /**
     * {@inheritDoc}
     * @see Unit::ATTACK
     */
    public const ATTACK = 40;

    /**
     * {@inheritDoc}
     * @see Unit::INFANTRY_DEFENSE
     */
    public const INFANTRY_DEFENSE = 60;

    /**
     * {@inheritDoc}
     * @see Unit::CAVALRY_DEFENSE
     */
    public const CAVALRY_DEFENSE = 40;

    /**
     * {@inheritDoc}
     * @see Unit::SPEED
     */
    public const SPEED = 4;

    /**
     * {@inheritDoc}
     * @see Unit::CAPACITY
     */
    public const CAPACITY = 0;

    /**
     * {@inheritDoc}
     * @see Unit::UPKEEP
     */
    public const UPKEEP = 4;

    /**
     * {@inheritDoc}
     * @see Unit::TRAIN_NEEDED_TIME
     */
    public const TRAIN_NEEDED_TIME = 70500;

    /**
     * {@inheritDoc}
     * @see Unit::RESEARCH_REQUIREMENTS
     */
    public const RESEARCH_REQUIREMENTS = [Academy::class => 20, RallyPoint::class => 5];

    /**
     * {@inheritDoc}
     * @see Unit::KIND
     */
    public const CATEGORY = UnitCategoryEnums::COLONIZERS;

    /**
     * {@inheritDoc}
     * @see Unit::CATEGORY
     */
    public const KIND = UnitKindEnums::CHIEF;

    /**
     * {@inheritDoc}
     * @see Unit::TRAIN_NEEDED_RESOURCES
     */
    protected const TRAIN_NEEDED_RESOURCES = [35500, 26600, 25000, 27200];
}

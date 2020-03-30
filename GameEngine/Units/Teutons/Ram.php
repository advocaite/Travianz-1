<?php


namespace Game\Units\Teutons;


use App\Enums\UnitKindEnums;
use App\Enums\UnitCategoryEnums;
use Game\Buildings\Academy;
use Game\Buildings\Workshop;
use App\Models\Unit;

final class Ram extends Unit
{
    /**
     * {@inheritDoc}
     * @see Unit::ATTACK
     */
    public const ATTACK = 65;

    /**
     * {@inheritDoc}
     * @see Unit::INFANTRY_DEFENSE
     */
    public const INFANTRY_DEFENSE = 30;

    /**
     * {@inheritDoc}
     * @see Unit::CAVALRY_DEFENSE
     */
    public const CAVALRY_DEFENSE = 80;

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
    public const UPKEEP = 3;

    /**
     * {@inheritDoc}
     * @see Unit::TRAIN_NEEDED_TIME
     */
    public const TRAIN_NEEDED_TIME = 4200;

    /**
     * {@inheritDoc}
     * @see Unit::RESEARCH_REQUIREMENTS
     */
    public const RESEARCH_REQUIREMENTS = [Academy::class => 10, Workshop::class => 1];

    /**
     * {@inheritDoc}
     * @see Unit::KIND
     */
    public const CATEGORY = UnitCategoryEnums::SIEGE;

    /**
     * {@inheritDoc}
     * @see Unit::CATEGORY
     */
    public const KIND = UnitKindEnums::RAM;

    /**
     * {@inheritDoc}
     * @see Unit::TRAIN_NEEDED_RESOURCES
     */
    protected const TRAIN_NEEDED_RESOURCES = [1000, 300, 350, 70];
}

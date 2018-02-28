<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\State\States;

/**
 * BattleState
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class BattleState implements StateInterface
{
    /**
     * How much life you have
     *
     * @var int
     */
    private $live;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->live = 100;
    }

    /**
     * {@inheritdoc}
     */
    public function update(int $elapsedTime): void
    {
        $this->live--;

        return;
    }

    /**
     * {@inheritdoc}
     */
    public function render(): string
    {
        return sprintf('You are in the middle of the battle');
    }

    /**
     * {@inheritdoc}
     */
    public function enter(): string
    {
        return sprintf('Your life is %s', $this->live);
    }

    /**
     * {@inheritdoc}
     */
    public function exit(): string
    {
        return sprintf('Your life is %s', $this->live);
    }
}

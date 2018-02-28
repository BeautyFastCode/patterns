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
 * MapState
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class MapState implements StateInterface
{
    /** How much time has elapsed
     *
     * @var int
     */
    private $elapsedTime;

    /**
     * {@inheritdoc}
     */
    public function update(int $elapsedTime): void
    {
        $this->elapsedTime = $elapsedTime;

        return;
    }

    /**
     * {@inheritdoc}
     */
    public function render(): string
    {
        return sprintf('You spend %sh in the village', $this->elapsedTime);
    }

    /**
     * {@inheritdoc}
     */
    public function enter(): string
    {
        return sprintf('You enter the village');
    }

    /**
     * {@inheritdoc}
     */
    public function exit(): string
    {
        return sprintf('You exit the village');
    }
}

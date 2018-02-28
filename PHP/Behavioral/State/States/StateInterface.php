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
 * StateInterface
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface StateInterface
{
    /**
     * This method is triggered in each frame when the current state is active.
     *
     * @param int $elapsedTime How much time has elapsed
     */
    public function update(int $elapsedTime): void;

    /**
     * This method is triggered in each frame when the current state is active.
     */
    public function render(): string;

    /**
     * This method is triggered when state is entered.
     */
    public function enter(): string;

    /**
     * This method is triggered when state is exited.
     */
    public function exit(): string;
}

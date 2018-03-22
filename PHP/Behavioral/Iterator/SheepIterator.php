<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Iterator;

/**
 * SheepIterator.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface SheepIterator
{
    /**
     * Checks if the next sheep exist.
     *
     * @return bool
     */
    public function hasNext(): bool;

    /**
     * Returns the next sheep.
     *
     * @return Sheep
     */
    public function next(): Sheep;
}

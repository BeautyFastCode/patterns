<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Entity;

/**
 * Laptop
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface Laptop
{
    /**
     * Turn on laptop.
     *
     * @return void
     */
    public function on(): void;

    /**
     * Turn off laptop.
     *
     * @return void
     */
    public function off(): void;
}

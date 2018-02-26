<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Adapter;

/**
 * CyborgInterface
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface CyborgInterface
{
    /**
     * Cyborg can move.
     *
     * @return string
     */
    public function move(): string;

    /**
     * Cyborg can says.
     *
     * @return string
     */
    public function says(): string;
}

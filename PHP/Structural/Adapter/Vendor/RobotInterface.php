<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Adapter\Vendor;

/**
 * RobotInterface.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface RobotInterface
{
    /**
     * Robot can walk.
     *
     * @return array
     */
    public function canWalk(): array;

    /**
     * Robot can speak.
     *
     * @return string
     */
    public function canSpeak(): string;
}

<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator;

/**
 * MediatorInterface
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface MediatorInterface
{
    /**
     * Run the schedule for the day.
     *
     * @param string $day
     */
    public function runSchedule(string $day): void;
}

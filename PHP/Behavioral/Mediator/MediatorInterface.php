<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator;

use PHP\Behavioral\Mediator\SmartHouse\Colleague;

/**
 * MediatorInterface
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface MediatorInterface
{
    /**
     * Synchronization between the Colleague objects.
     *
     * @param Colleague $changingInClass The class whose state has changed
     */
    public function change(Colleague $changingInClass): void;
}

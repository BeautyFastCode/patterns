<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Behavior;

/**
 * BehaviorInterface.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface BehaviorInterface
{
    /**
     * Just an action: fly, walk etc.
     *
     * @return string
     */
    public function action(): string;
}

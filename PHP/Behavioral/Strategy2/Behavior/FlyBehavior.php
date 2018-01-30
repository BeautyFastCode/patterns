<?php

/*
 * (c)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Behavior;

/**
 * FlyBehavior
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class FlyBehavior implements BehaviorInterface
{
    /**
     * Just an action: fly, walk etc.
     *
     * @return string
     */
    public function action()
    {
        return printf("I can fly\n");
    }
}

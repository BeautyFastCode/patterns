<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy\Behavior;

/**
 * WalkBehavior.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class WalkBehavior implements BehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function action(): string
    {
        return sprintf("I can walk\n");
    }
}

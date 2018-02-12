<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Behavior;

/**
 * DoNothing.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class DoNothing implements BehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function action(): string
    {
        return '';
    }
}

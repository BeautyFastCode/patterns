<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Behavior;

/**
 * FlyBehavior.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class FlyBehavior implements BehaviorInterface
{
    /**
     * {@inheritdoc}
     */
    public function action(): string
    {
        return sprintf("I can fly\n");
    }
}

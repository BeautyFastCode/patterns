<?php

/*
 * (c)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy\Tests;

use PHP\Behavioral\Strategy\Behavior\FlyBehavior;
use PHP\Behavioral\Strategy\Behavior\WalkBehavior;
use PHP\Behavioral\Strategy\Unit\Unit;
use PHPUnit\Framework\TestCase;

/**
 * StrategyTest
 *
 * @author    <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class StrategyTest extends TestCase
{
    /**
     * Main loop
     */
    public function testMain()
    {
        $expected = [
            "Unit says: I'm the Ship\n",
            "I can fly\n",
            "Unit says: I'm the Robot\n",
            "I can walk\n"
        ];

        $flying = new Unit('Ship', new FlyBehavior());
        $walking = new Unit('Robot', new WalkBehavior());

        $this->assertEquals($expected[0], $flying->speak());
        $this->assertEquals($expected[1], $flying->behaviorAction());

        $this->assertEquals($expected[2], $walking->speak());
        $this->assertEquals($expected[3], $walking->behaviorAction());
    }
}

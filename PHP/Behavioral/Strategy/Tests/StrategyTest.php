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
use PHP\Behavioral\Strategy\Unit;
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
        printf("\n--- Design Pattern Strategy ---\n");

        $flying = new Unit('Ship', new FlyBehavior());
        $walking = new Unit('Robot', new WalkBehavior());

        printf("\n");

        printf($flying->speak());
        printf($flying->behaviorAction());

        printf($walking->speak());
        printf($walking->behaviorAction());

        // Always true :-)
        $this->assertEquals(true, true);
    }
}

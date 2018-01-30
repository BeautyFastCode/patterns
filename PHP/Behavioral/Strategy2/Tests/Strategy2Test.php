<?php

/*
 * (c)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Tests;

use PHP\Behavioral\Strategy2\Behavior\FlyBehavior;
use PHP\Behavioral\Strategy2\Behavior\WalkBehavior;
use PHP\Behavioral\Strategy2\Unit;
use PHPUnit\Framework\TestCase;

/**
 * Strategy2Test
 *
 * @author    <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Strategy2Test extends TestCase
{
    /**
     * Main loop
     */
    public function testMain()
    {
        printf("\n--- Design Pattern Strategy - Example 2 ---\n");

        $flying = new Unit('Ship', new FlyBehavior());
        $walking = new Unit('Robot', new WalkBehavior());

        printf("\n");

        $flying->speak();
        $walking->speak();

        // Always true :-)
        $this->assertEquals(true, true);
    }
}

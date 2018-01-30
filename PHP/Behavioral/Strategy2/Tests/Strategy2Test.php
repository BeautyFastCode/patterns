<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy2\Tests;

use PHP\Behavioral\Strategy2\Behavior\FlyBehavior;
use PHP\Behavioral\Strategy2\Behavior\WalkBehavior;
use PHP\Behavioral\Strategy2\Hero;
use PHP\Behavioral\Strategy2\Luck\BigLuck;
use PHP\Behavioral\Strategy2\Robot;
use PHP\Behavioral\Strategy2\Ship;
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

        $ship = new Ship('Galactic Destructor', new FlyBehavior());
        $hero = new Hero('Atom', 50);
        $robot = new Robot('Cyborg', new WalkBehavior());

        printf("\n");

        printf($ship->speak());
        printf($ship->action());
        printf("\n");

        printf($hero->speak());
        printf($hero->action());
        printf("\n");

        printf($robot->speak());
        printf($robot->action());
        printf($robot->getLuck());
        $robot->setLuck(new BigLuck());
        printf($robot->getLuck());

        // Always true :-)
        $this->assertEquals(true, true);
    }
}

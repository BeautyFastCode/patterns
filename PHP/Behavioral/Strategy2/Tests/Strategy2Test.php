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
use PHP\Behavioral\Strategy2\Luck\BigLuck;
use PHP\Behavioral\Strategy2\Luck\SmallLuck;
use PHP\Behavioral\Strategy2\Unit\Hero;
use PHP\Behavioral\Strategy2\Unit\Robot;
use PHP\Behavioral\Strategy2\Unit\Ship;
use PHPUnit\Framework\TestCase;

/**
 * Strategy2Test.
 *
 * @author    <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Strategy2Test extends TestCase
{
    /**
     * Main loop.
     */
    public function testMain()
    {
        $expected = [
            "Ship says: I'm the Galactic Destructor\n",
            "I can fly\n",
            "I'm Atom. I'm the Hero. The Hero don't speak, and do nothing.\n The Hero has the Power 50 MW\n",
            '',
            "Robot says: I'm the Cyborg\n",
            "I can walk\n",
            "I don't have luck\n",
            "I'm lucky. I have big luck\n",
            "I'm lucky. I have small luck\n",
        ];

        $ship = new Ship('Galactic Destructor', new FlyBehavior());
        $hero = new Hero('Atom', 50);
        $robot = new Robot('Cyborg', new WalkBehavior());

        $this->assertEquals($expected[0], $ship->speak());
        $this->assertEquals($expected[1], $ship->action());

        $this->assertEquals($expected[2], $hero->speak());
        $this->assertEquals($expected[3], $hero->action());

        $this->assertEquals($expected[4], $robot->speak());
        $this->assertEquals($expected[5], $robot->action());
        $this->assertEquals($expected[6], $robot->getLuck());

        $robot->setLuck(new BigLuck());
        $this->assertEquals($expected[7], $robot->getLuck());

        $robot->setLuck(new SmallLuck());
        $this->assertEquals($expected[8], $robot->getLuck());
    }
}

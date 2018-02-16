<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Adapter;

use PHP\Structural\Adapter\Vendor\Robot;
use PHPUnit\Framework\TestCase;

/**
 * Test cases for adapter design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class AdapterTest extends TestCase
{
    /**
     * Tests the adapter design pattern.
     */
    public function testMain()
    {
        $cyborg = new Cyborg();
        $this->assertEquals('Cyborg moves.', $cyborg->move());
        $this->assertEquals('I\'m the Cyborg.', $cyborg->says());

        $robot = new Robot();
        $robotResponse = [
            Robot::class,
            'walk',
        ];

        $this->assertEquals($robotResponse, $robot->canWalk());
        $this->assertEquals('i\'M tHe RoBoT.', $robot->canSpeak());

        $adaptedRobot = new CyborgAdapter($robot);
        $this->assertEquals('Robot moves.', $adaptedRobot->move());
        $this->assertEquals('I\'m the Robot.', $adaptedRobot->says());
    }
}

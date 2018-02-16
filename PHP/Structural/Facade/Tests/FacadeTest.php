<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Facade\Tests;

use PHP\Structural\Entity\Browser;
use PHP\Structural\Entity\Laptop;
use PHP\Structural\Entity\System;
use PHP\Structural\Facade\CinemaFacade;
use PHPUnit\Framework\TestCase;

use PHPUnit_Framework_MockObject_MockObject as MockObject;

/**
 * FacadeTest, test cases for facade design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class FacadeTest extends TestCase
{
    /**
     * Tests the facade design pattern.
     */
    public function testMain()
    {
        /*
         * The createMock($type) method immediately returns a test double object.
         */
        $system = $this->createMock(System::class);

        /** @var Browser|MockObject $browser */
        $browser = $this->createMock(Browser::class);
        $browser->method('getTitle')
            ->will($this->returnValue('Gladiator'));

        /*
         * The getMockBuilder($type) method customize the test double generation.
         */
        $laptop = $this->getMockBuilder(Laptop::class)
            ->setMethods(['on', 'off'])
            ->disableAutoload()
            ->getMock();

        /*
         * Test the Cinema Facade.
         */
        $facade = new CinemaFacade($system, $laptop, $browser);
        $facade->startWatchMovie('Gladiator');
        $facade->stopWatchMovie();

        $this->assertEquals('Gladiator', $browser->getTitle());
    }
}
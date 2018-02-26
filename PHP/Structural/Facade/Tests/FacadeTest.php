<?php

declare(strict_types=1);

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
    public function testMain(): void
    {
        /*
         * The getMockBuilder($type) method customize the test double generation.
         */
        $system = $this->getMockBuilder(System::class)->getMock();

        /** @var Browser|MockObject $browser */
        $browser = $this->getMockBuilder(Browser::class)->getMock();

        $browser->method('getTitle')
            ->willReturn('Gladiator');

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

        return;
    }
}

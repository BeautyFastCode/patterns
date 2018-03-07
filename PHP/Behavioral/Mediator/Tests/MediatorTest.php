<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator\Tests;

use PHP\Behavioral\Mediator\Calendar;
use PHP\Behavioral\Mediator\SmartHouse\Clock;
use PHP\Behavioral\Mediator\SmartHouse\CoffeeMachine;
use PHPUnit\Framework\TestCase;

/**
 * Test case for Mediator design pattern.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class MediatorTest extends TestCase
{
    /**
     * Main test for Mediator design pattern.
     */
    public function testMain(): void
    {
        $clock = new Clock();
        $coffeeMachine = new CoffeeMachine();

        $calendar = new Calendar($clock, $coffeeMachine);

        $calendar->runSchedule('monday');
        $this->assertEquals(true, $clock->isEnable());
        $this->assertEquals('Strong Coffee', $coffeeMachine->getCoffee());

        $calendar->runSchedule('weekend');
        $this->assertEquals(false, $clock->isEnable());
        $this->assertEquals('Cappuccino', $coffeeMachine->getCoffee());

        return;
    }
}

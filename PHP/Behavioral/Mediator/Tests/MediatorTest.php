<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator\Tests;

use PHP\Behavioral\Mediator\Mediator;
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

        new Mediator($clock, $coffeeMachine);

        $clock->turnOn();
        $this->assertEquals('Strong Coffee', $coffeeMachine->getCoffeeKind());

        $coffeeMachine->make('Cappuccino');
        $this->assertEquals(false, $clock->isEnable());

        $coffeeMachine->make('Strong Coffee');
        $this->assertEquals(true, $clock->isEnable());

        $clock->turnOff();
        $this->assertEquals('Cappuccino', $coffeeMachine->getCoffeeKind());

        return;
    }
}

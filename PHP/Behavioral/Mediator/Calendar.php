<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator;

use PHP\Behavioral\Mediator\SmartHouse\Clock;
use PHP\Behavioral\Mediator\SmartHouse\CoffeeMachine;

/**
 * Calendar
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Calendar implements MediatorInterface
{
    /**
     * @var Clock
     */
    private $clock;

    /**
     * @var CoffeeMachine
     */
    private $coffeeMachine;

    /**
     * Class constructor
     *
     * @param Clock         $clock
     * @param CoffeeMachine $coffeeMachine
     */
    public function __construct(Clock $clock, CoffeeMachine $coffeeMachine)
    {
        $this->clock = $clock;
        $this->coffeeMachine = $coffeeMachine;

        $this->clock->setMediator($this);
        $this->coffeeMachine->setMediator($this);
    }

    /**
     * {@inheritdoc}
     */
    public function runSchedule(string $day): void
    {
        if($day === 'monday') {
            $this->clock->turnOn();
            $this->coffeeMachine->make('Strong Coffee');
        }

        if($day === 'weekend') {
            $this->clock->turnOff();
            $this->coffeeMachine->make('Cappuccino');
        }
        return;
    }
}

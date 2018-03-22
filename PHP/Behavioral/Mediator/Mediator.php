<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator;

use PHP\Behavioral\Mediator\SmartHouse\Clock;
use PHP\Behavioral\Mediator\SmartHouse\CoffeeMachine;
use PHP\Behavioral\Mediator\SmartHouse\Colleague;

/**
 * Mediator.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Mediator implements MediatorInterface
{
    /**
     * The smart clock from the smart house.
     *
     * @var Clock
     */
    private $clock;

    /**
     * The smart coffee machine from the smart house.
     *
     * @var CoffeeMachine
     */
    private $coffeeMachine;

    /**
     * Class constructor.
     *
     * @param Clock         $clock         The smart clock from the smart house
     * @param CoffeeMachine $coffeeMachine The smart coffee machine from the smart house
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
    public function change(Colleague $changingInClass): void
    {
        if ($changingInClass instanceof Clock) {
            /** @var Clock $changingInClass */
            if ($changingInClass->isEnable()) {
                $this->coffeeMachine->setCoffeeKind('Strong Coffee');
            } else {
                $this->coffeeMachine->setCoffeeKind('Cappuccino');
            }
        }

        if ($changingInClass instanceof CoffeeMachine) {
            /** @var CoffeeMachine $changingInClass */
            if ('Strong Coffee' === $changingInClass->getCoffeeKind()) {
                $this->clock->setEnable(true);
            } else {
                $this->clock->setEnable(false);
            }
        }

        return;
    }
}

<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator\SmartHouse;

/**
 * CoffeeMachine.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class CoffeeMachine extends Colleague
{
    /**
     * The kind of coffee.
     *
     * @var string
     */
    private $coffeeKind;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->coffeeKind = '';
    }

    /**
     * Make the coffee.
     *
     * @param string $coffeeKind
     */
    public function make(string $coffeeKind): void
    {
        $this->coffeeKind = $coffeeKind;
        $this->getMediator()->change($this);

        return;
    }

    /**
     * Set the kind of coffee to the machine.
     *
     * @param string $coffeeKind
     */
    public function setCoffeeKind(string $coffeeKind): void
    {
        $this->coffeeKind = $coffeeKind;

        return;
    }

    /**
     * Returns the kind of coffee from the machine.
     *
     * @return string
     */
    public function getCoffeeKind(): string
    {
        return $this->coffeeKind;
    }
}

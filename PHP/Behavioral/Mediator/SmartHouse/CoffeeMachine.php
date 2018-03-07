<?php

declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Mediator\SmartHouse;

/**
 * CoffeeMachine
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class CoffeeMachine extends Colleague
{
    /**
     * @var string
     */
    private $coffee;

    public function make(string $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * @return string
     */
    public function getCoffee(): string
    {
        return $this->coffee;
    }
}

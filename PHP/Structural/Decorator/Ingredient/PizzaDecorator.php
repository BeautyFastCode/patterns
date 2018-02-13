<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Decorator\Ingredient;

/**
 * PizzaDecorator
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class PizzaDecorator
{
    /**
     * Price of a pizza.
     *
     * @var float
     */
    private $price;

    /**
     * Returns a pizza costs.
     *
     * @return float
     */
    abstract public function getCost(): float;

    /**
     * Sets the basic price of a pizza.
     *
     * @param float $price
     *
     * @return float
     */
    public function setBasePrice(float $price)
    {
        return $this->price = $price;
    }
}

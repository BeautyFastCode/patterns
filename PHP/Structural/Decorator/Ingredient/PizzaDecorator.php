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
     * Calculate and returns a pizza costs.
     *
     * @return float
     */
    abstract public function getCost(): float;

    /**
     * Returns a pizza description.
     *
     * @return string
     */
    abstract public function getDescription(): string;
}

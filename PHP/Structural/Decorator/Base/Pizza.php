<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Decorator\Base;

use PHP\Structural\Decorator\Ingredient\PizzaDecorator;

/**
 * Pizza
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Pizza extends PizzaDecorator
{
    /**
     * The name of the pizza.
     *
     * @var string
     */
    private $name;

    /**
     * Class constructor
     *
     * @param string $name The name of the pizza
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the pizza costs.
     *
     * @return float
     */
    public function getCost(): float
    {
        return $this->setBasePrice(10.00);
    }
}

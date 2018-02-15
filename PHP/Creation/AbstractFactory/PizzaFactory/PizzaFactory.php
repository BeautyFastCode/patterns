<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\AbstractFactory\PizzaFactory;

use PHP\Creation\AbstractFactory\Pizza\Pizza;

/**
 * PizzaFactory
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class PizzaFactory
{
    /**
     * Creates pizza.
     *
     * @param $pizzaName string The Pizza name
     *
     * @return Pizza
     */
    abstract protected function createPizza($pizzaName): Pizza;

    /**
     * What type of pizza you want?
     *
     * @param $pizzaName string The Pizza name
     *
     * @return Pizza
     */
    public function orderPizza($pizzaName): Pizza
    {
        $pizza = $this->createPizza($pizzaName);

        return $pizza->prepare();
    }
}

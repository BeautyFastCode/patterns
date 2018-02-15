<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\SimpleFactory;

use PHP\Creation\SimpleFactory\Exception\CreatePizzaNotFoundException;
use PHP\Creation\SimpleFactory\Pizza\AmericanPizza;
use PHP\Creation\SimpleFactory\Pizza\HawaiiPizza;
use PHP\Creation\SimpleFactory\Pizza\ItalianPizza;
use PHP\Creation\SimpleFactory\Pizza\Pizza;
use PHP\Creation\SimpleFactory\Pizza\PizzaTypes;

/**
 * SimpleFactory
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class SimpleFactory
{
    /**
     * Creates different types of pizzas.
     *
     * @param $pizzaName string The pizza name
     *
     * @return Pizza
     * @throws CreatePizzaNotFoundException
     */
    public function orderPizza($pizzaName): Pizza
    {
        switch ($pizzaName) {
            case PizzaTypes::AMERICAN:
                return new AmericanPizza();

            case PizzaTypes::HAWAII:
                return new HawaiiPizza();

            case PizzaTypes::ITALIAN:
                $pizza = new ItalianPizza();
                return $pizza;
        }
        throw new CreatePizzaNotFoundException($pizzaName);
    }
}

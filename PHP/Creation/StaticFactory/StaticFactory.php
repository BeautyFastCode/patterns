<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\StaticFactory;

use PHP\Creation\StaticFactory\Exception\CreatePizzaNotFoundException;
use PHP\Creation\StaticFactory\Pizza\AmericanPizza;
use PHP\Creation\StaticFactory\Pizza\HawaiiPizza;
use PHP\Creation\StaticFactory\Pizza\ItalianPizza;
use PHP\Creation\StaticFactory\Pizza\Pizza;
use PHP\Creation\StaticFactory\Pizza\PizzaTypes;

/**
 * StaticFactory.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
final class StaticFactory
{
    /**
     * Creates different types of pizzas.
     *
     * @param $pizzaName string The pizza name
     *
     * @return Pizza
     *
     * @throws CreatePizzaNotFoundException
     */
    public static function orderPizza($pizzaName): Pizza
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

<?php declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\FactoryMethod\Factory;

use PHP\Creation\FactoryMethod\Exception\CreatePizzaNotFoundException;
use PHP\Creation\FactoryMethod\Pizza\AmericanPizza;
use PHP\Creation\FactoryMethod\Pizza\HawaiiPizza;
use PHP\Creation\FactoryMethod\Pizza\ItalianPizza;
use PHP\Creation\FactoryMethod\Pizza\Pizza;
use PHP\Creation\FactoryMethod\Pizza\PizzaTypes;

/**
 * AmericanFactory
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class AmericanFactory extends FactoryMethod
{
    /**
     * The American factory creates different types of pizzas.
     *
     * {@inheritdoc}
     */
    protected function createPizza(string $pizzaName): Pizza
    {
        switch ($pizzaName) {
            case PizzaTypes::AMERICAN:
                return new AmericanPizza();

            case PizzaTypes::HAWAII:
                return new HawaiiPizza();

            case PizzaTypes::ITALIAN:
                $pizza = new ItalianPizza();
                $pizza->setPrice(10.00);

                return $pizza;
        }
        throw new CreatePizzaNotFoundException($pizzaName);
    }
}

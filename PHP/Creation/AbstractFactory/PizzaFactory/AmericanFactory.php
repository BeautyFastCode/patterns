<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\AbstractFactory\PizzaFactory;

use PHP\Creation\AbstractFactory\Exception\CreatePizzaNotFoundException;
use PHP\Creation\AbstractFactory\IngredientFactory\AmericanIngredientFactory;
use PHP\Creation\AbstractFactory\IngredientFactory\HawaiiIngredientFactory;
use PHP\Creation\AbstractFactory\IngredientFactory\ItalianIngredientFactory;
use PHP\Creation\AbstractFactory\Pizza\AmericanPizza;
use PHP\Creation\AbstractFactory\Pizza\HawaiiPizza;
use PHP\Creation\AbstractFactory\Pizza\ItalianPizza;
use PHP\Creation\AbstractFactory\Pizza\Pizza;
use PHP\Creation\AbstractFactory\Pizza\PizzaTypes;

/**
 * AmericanFactory.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class AmericanFactory extends PizzaFactory
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
                return new AmericanPizza(new AmericanIngredientFactory());

            case PizzaTypes::HAWAII:
                return new HawaiiPizza(new HawaiiIngredientFactory());

            case PizzaTypes::ITALIAN:
                $pizza = new ItalianPizza(new ItalianIngredientFactory());

                return $pizza;
        }
        throw new CreatePizzaNotFoundException($pizzaName);
    }
}

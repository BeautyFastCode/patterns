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
use PHP\Creation\AbstractFactory\IngredientFactory\ItalianIngredientFactory;
use PHP\Creation\AbstractFactory\Pizza\ItalianPizza;
use PHP\Creation\AbstractFactory\Pizza\MargheritaPizza;
use PHP\Creation\AbstractFactory\Pizza\Pizza;
use PHP\Creation\AbstractFactory\Pizza\PizzaTypes;

/**
 * ItalianFactory.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class ItalianFactory extends PizzaFactory
{
    /**
     * The Italian factory creates only italian pizzas.
     *
     * {@inheritdoc}
     */
    protected function createPizza(string $pizzaName): Pizza
    {
        $italianIngredient = new ItalianIngredientFactory();

        switch ($pizzaName) {
            case  PizzaTypes::ITALIAN:
                return new ItalianPizza($italianIngredient);

            case PizzaTypes::MARGHERITA:
                return new MargheritaPizza($italianIngredient);
        }
        throw new CreatePizzaNotFoundException($pizzaName);
    }
}

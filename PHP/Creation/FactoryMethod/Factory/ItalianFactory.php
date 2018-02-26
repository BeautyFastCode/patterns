<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\FactoryMethod\Factory;

use PHP\Creation\FactoryMethod\Exception\CreatePizzaNotFoundException;
use PHP\Creation\FactoryMethod\Pizza\ItalianPizza;
use PHP\Creation\FactoryMethod\Pizza\Pizza;
use PHP\Creation\FactoryMethod\Pizza\PizzaTypes;

/**
 * ItalianFactory.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class ItalianFactory extends FactoryMethod
{
    /**
     * The Italian factory creates only italian pizzas.
     *
     * {@inheritdoc}
     */
    protected function createPizza(string $pizzaName): Pizza
    {
        if (PizzaTypes::ITALIAN == $pizzaName) {
            return new ItalianPizza();
        }
        throw new CreatePizzaNotFoundException($pizzaName);
    }
}

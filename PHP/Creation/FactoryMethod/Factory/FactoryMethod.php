<?php declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\FactoryMethod\Factory;

use PHP\Creation\FactoryMethod\Exception\CreatePizzaNotFoundException;
use PHP\Creation\FactoryMethod\Pizza\Pizza;

/**
 * FactoryMethod
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class FactoryMethod
{
    /**
     * The Factory Method, who creates pizza.
     *
     * @param string $pizzaName The Pizza name
     *
     * @return Pizza
     * @throws CreatePizzaNotFoundException
     */
    abstract protected function createPizza(string $pizzaName): Pizza;

    /**
     * What type of pizza you want?
     *
     * @param string $pizzaName The Pizza name
     *
     * @return Pizza
     */
    public function orderPizza(string $pizzaName): Pizza
    {
        return $this->createPizza($pizzaName);
    }
}

<?php declare(strict_types = 1);

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
     * @param string $pizzaName The Pizza name
     *
     * @return Pizza
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
        $pizza = $this->createPizza($pizzaName);

        return $pizza->prepare();
    }
}

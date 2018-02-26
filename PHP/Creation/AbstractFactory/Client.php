<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\AbstractFactory;

use PHP\Creation\AbstractFactory\PizzaFactory\PizzaFactory;

/**
 * Very hungry the pizzeria client.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Client
{
    /**
     * Factory where the client orders a pizza.
     *
     * @var PizzaFactory
     */
    private $pizzaFactory;

    /**
     * Class constructor.
     *
     * @param PizzaFactory $pizzaFactory Factory where the client orders a pizza
     */
    public function __construct(PizzaFactory $pizzaFactory)
    {
        $this->pizzaFactory = $pizzaFactory;
    }

    /**
     * The client is tasting a pizza.
     *
     * @param string $pizzaName The Pizza name
     *
     * @return string
     */
    public function pizzaTasting(string $pizzaName): string
    {
        $pizza = $this->pizzaFactory->orderPizza($pizzaName);

        return sprintf('Pizza \'%s\' was very good!', $pizza->getName());
    }
}

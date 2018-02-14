<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Decorator\Ingredient;

use PHP\Structural\Decorator\Base\PizzaDecorator;

/**
 * TomatoSauce
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class TomatoSauce extends PizzaDecorator
{
    /**
     * {@inheritdoc}
     */
    public function __construct(PizzaDecorator $pizza)
    {
        parent::__construct($pizza);
        $this->setDescription('TomatoSauce');
    }

    /**
     * {@inheritdoc}
     */
    public function calculateCost(): float
    {
        return $this->getPizza()->calculateCost() + 1.00;
    }
}

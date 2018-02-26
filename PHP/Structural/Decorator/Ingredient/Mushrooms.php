<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Decorator\Ingredient;

use PHP\Structural\Decorator\Base\PizzaDecorator;

/**
 * Mushrooms
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Mushrooms extends PizzaDecorator
{
    /**
     * {@inheritdoc}
     */
    public function __construct(PizzaDecorator $pizza)
    {
        parent::__construct($pizza);
        $this->setDescription('Mushrooms');
    }

    /**
     * {@inheritdoc}
     */
    public function calculateCost(): float
    {
        return $this->getPizza()->calculateCost() + 2.50;
    }
}

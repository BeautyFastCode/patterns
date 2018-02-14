<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Decorator\Ingredient;

/**
 * JalapenoSauce
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class JalapenoSauce extends PizzaDecorator
{
    /**
     * The pizza plus ingredients.
     *
     * @var PizzaDecorator
     */
    private $pizza;

    /**
     * Class constructor
     *
     * @param PizzaDecorator $pizza The pizza plus ingredients
     */
    public function __construct(PizzaDecorator $pizza)
    {
        $this->pizza = $pizza;
    }

    /**
     * {@inheritdoc}
     */
    public function getCost(): float
    {
        return $this->pizza->getCost() + 4.50;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(): string
    {
        return sprintf('%s JalapenoSauce', $this->pizza->getDescription());
    }
}

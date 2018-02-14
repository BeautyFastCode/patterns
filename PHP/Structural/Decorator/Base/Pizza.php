<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Decorator\Base;

use PHP\Structural\Decorator\Ingredient\PizzaDecorator;

/**
 * Pizza
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Pizza extends PizzaDecorator
{
    /**
     * The description of the pizza.
     *
     * @var string
     */
    private $description;

    /**
     * The price of the pizza.
     *
     * @var float
     */
    private $price;

    /**
     * The amount of ingredients.
     *
     * @var int
     */
    public $amountIngredients;

    /**
     * Class constructor
     *
     * @param string $description The description of the pizza
     */
    public function __construct($description)
    {
        $this->description = $description;
        $this->price = 10.00;
        $this->amountIngredients = 1;
    }

    /**
     * {@inheritdoc}
     */
    public function getCost(): float
    {
        return $this->price;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(): string
    {
        return sprintf('%s + ingredients:', $this->description);
    }
}

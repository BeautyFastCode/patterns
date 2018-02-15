<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\AbstractFactory\Pizza;

use PHP\Creation\AbstractFactory\Ingredient\Dough;
use PHP\Creation\AbstractFactory\Ingredient\Sauce;
use PHP\Creation\AbstractFactory\Ingredient\Topping;

/**
 * Pizza
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class Pizza
{
    /**
     * The Name of the pizza.
     *
     * @var string
     */
    private $name;

    /**
     * The Dough for the pizza.
     *
     * @var Dough
     */
    private $dough;

    /**
     * The Sauce for the pizza.
     *
     * @var Sauce
     */
    private $sauce;

    /**
     * The Topping for the pizza.
     *
     * @var Topping
     */
    private $topping;

    /**
     * Pizza constructor
     *
     * @param $name string The Name of pizza
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Prepare ingredients for the Pizza.
     *
     * @return Pizza
     */
    abstract public function prepare(): Pizza;

    /**
     * Returns list of ingredients.
     *
     * @return string
     */
    public function listIngredients(): string
    {
        $listIngredients = '';

        if ($this->name !== null) {
            $listIngredients = sprintf('%s:', $this->name);
        }
        if ($this->dough !== null) {
            $listIngredients = sprintf('%s %s,', $listIngredients, $this->dough);
        }
        if ($this->topping !== null) {
            $listIngredients = sprintf('%s %s,', $listIngredients, $this->topping);
        }
        if ($this->sauce !== null) {
            $listIngredients = sprintf('%s %s.', $listIngredients, $this->sauce);
        }

        return $listIngredients;
    }

    /**
     * Returns the pizza name
     *
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Sets the pizza dough.
     *
     * @param Dough $dough
     */
    public function setDough(Dough $dough)
    {
        $this->dough = $dough;
    }

    /**
     * Sets the pizza sauce.
     *
     * @param Sauce $sauce
     */
    public function setSauce(Sauce $sauce)
    {
        $this->sauce = $sauce;
    }

    /**
     * Sets the pizza topping.
     *
     * @param Topping $topping
     */
    public function setTopping(Topping $topping)
    {
        $this->topping = $topping;
    }
}

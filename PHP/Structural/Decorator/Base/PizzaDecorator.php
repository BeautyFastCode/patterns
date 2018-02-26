<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Decorator\Base;

/**
 * PizzaDecorator
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class PizzaDecorator
{
    /**
     * The description of the pizza.
     *
     * @var string
     */
    private $description;

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
     * Calculate and returns the pizza costs.
     *
     * @return float
     */
    abstract public function calculateCost(): float;

    /**
     * Return the list of the pizza ingredients
     *
     * @return string
     */
    public function listIngredients(): string
    {
        $ingredients = sprintf('%s', $this->getDescription());
        $pizza = $this->pizza;

        while ($pizza !== null && $pizza instanceof PizzaDecorator) {
            $ingredients = sprintf('%s, %s', $pizza->getDescription(), $ingredients);
            $pizza = $pizza->pizza;
        }

        return $ingredients;
    }

    /**
     * Returns amount of ingredients.
     *
     * @return int
     */
    public function amountIngredients(): int
    {
        $count = 1;
        $pizza = $this->pizza;

        while ($pizza !== null && $pizza instanceof PizzaDecorator) {
            $count++;
            $pizza = $pizza->pizza;
        }
        return $count;
    }

    /**
     * Returns the pizza description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the pizza description.
     *
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;

        return;
    }

    /**
     * Set the pizza decorator.
     *
     * @param PizzaDecorator|null $pizza
     */
    public function setPizza(PizzaDecorator $pizza = null): void
    {
        $this->pizza = $pizza;

        return;
    }

    /**
     * Get the pizza decorator.
     *
     * @return PizzaDecorator
     */
    public function getPizza(): PizzaDecorator
    {
        return $this->pizza;
    }
}

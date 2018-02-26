<?php declare(strict_types = 1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\AbstractFactory\Pizza;
use PHP\Creation\AbstractFactory\IngredientFactory\IngredientFactory;

/**
 * MargheritaPizza
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class MargheritaPizza extends Pizza
{
    /**
     * The factory for pizza ingredients.
     *
     * @var IngredientFactory
     */
    private $ingredientFactory;

    /**
     * Pizza constructor
     *
     * @param IngredientFactory $ingredientFactory
     */
    public function __construct(IngredientFactory $ingredientFactory)
    {
        parent::__construct(PizzaTypes::MARGHERITA);
        $this->ingredientFactory = $ingredientFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(): Pizza
    {
        $this->setDough($this->ingredientFactory->createDough());
        $this->setSauce($this->ingredientFactory->createSauce());

        return $this;
    }}

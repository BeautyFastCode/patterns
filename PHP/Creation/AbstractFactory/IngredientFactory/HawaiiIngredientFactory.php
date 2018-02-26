<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\AbstractFactory\IngredientFactory;

use PHP\Creation\AbstractFactory\Ingredient\DiabloSauce;
use PHP\Creation\AbstractFactory\Ingredient\Dough;
use PHP\Creation\AbstractFactory\Ingredient\PineappleTopping;
use PHP\Creation\AbstractFactory\Ingredient\Sauce;
use PHP\Creation\AbstractFactory\Ingredient\ThinDough;
use PHP\Creation\AbstractFactory\Ingredient\Topping;

/**
 * HawaiiIngredientFactory.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class HawaiiIngredientFactory implements IngredientFactory
{
    /**
     * {@inheritdoc}
     */
    public function createDough(): Dough
    {
        return new ThinDough();
    }

    /**
     * {@inheritdoc}
     */
    public function createTopping(): Topping
    {
        return new PineappleTopping();
    }

    /**
     * {@inheritdoc}
     */
    public function createSauce(): Sauce
    {
        return new DiabloSauce();
    }
}

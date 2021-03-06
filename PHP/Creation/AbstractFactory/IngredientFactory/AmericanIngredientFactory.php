<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\AbstractFactory\IngredientFactory;

use PHP\Creation\AbstractFactory\Ingredient\BaconTopping;
use PHP\Creation\AbstractFactory\Ingredient\Dough;
use PHP\Creation\AbstractFactory\Ingredient\GarlicSauce;
use PHP\Creation\AbstractFactory\Ingredient\Sauce;
use PHP\Creation\AbstractFactory\Ingredient\ThickDough;
use PHP\Creation\AbstractFactory\Ingredient\Topping;

/**
 * AmericanIngredientFactory.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class AmericanIngredientFactory implements IngredientFactory
{
    /**
     * {@inheritdoc}
     */
    public function createDough(): Dough
    {
        return new ThickDough();
    }

    /**
     * {@inheritdoc}
     */
    public function createTopping(): Topping
    {
        return new BaconTopping();
    }

    /**
     * {@inheritdoc}
     */
    public function createSauce(): Sauce
    {
        return new GarlicSauce();
    }
}

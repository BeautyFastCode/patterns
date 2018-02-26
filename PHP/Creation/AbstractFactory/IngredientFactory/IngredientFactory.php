<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\AbstractFactory\IngredientFactory;

use PHP\Creation\AbstractFactory\Ingredient\Dough;
use PHP\Creation\AbstractFactory\Ingredient\Sauce;
use PHP\Creation\AbstractFactory\Ingredient\Topping;

/**
 * IngredientFactory.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface IngredientFactory
{
    /**
     * Create dough for the Pizza.
     *
     * @return Dough
     */
    public function createDough(): Dough;

    /**
     * Create toppling for the Pizza.
     *
     * @return Topping
     */
    public function createTopping(): Topping;

    /**
     * Create sauce for the Pizza.
     *
     * @return Sauce
     */
    public function createSauce(): Sauce;
}

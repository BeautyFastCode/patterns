<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\AbstractFactory\Ingredient;

/**
 * PineappleTopping.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class PineappleTopping implements Topping
{
    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return IngredientTypes::PINEAPPLE_TOPPING;
    }
}

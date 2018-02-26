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
 * GarlicSauce.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class GarlicSauce implements Sauce
{
    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return IngredientTypes::GARLIC_SAUCE;
    }
}

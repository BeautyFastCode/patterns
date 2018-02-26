<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\SimpleFactory\Pizza;

/**
 * HawaiiPizza.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class HawaiiPizza extends Pizza
{
    /**
     * Pizza constructor.
     */
    public function __construct()
    {
        parent::__construct(PizzaTypes::HAWAII);
        $this->setPrice(15.50);
    }
}

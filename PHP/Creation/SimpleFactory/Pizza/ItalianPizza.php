<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\SimpleFactory\Pizza;

/**
 * ItalianPizza
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class ItalianPizza extends Pizza
{
    /**
     * Pizza constructor
     */
    public function __construct()
    {
        parent::__construct(PizzaTypes::ITALIAN);
        $this->setPrice(7.50);
    }
}

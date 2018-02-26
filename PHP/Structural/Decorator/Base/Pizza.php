<?php

declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Structural\Decorator\Base;

/**
 * Pizza.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Pizza extends PizzaDecorator
{
    /**
     * Class constructor.
     *
     * @param string $description The description of the pizza
     */
    public function __construct(string $description)
    {
        parent::__construct($this);

        $this->setPizza(null);
        $this->setDescription($description);
    }

    /**
     * {@inheritdoc}
     */
    public function calculateCost(): float
    {
        return 10.00;
    }
}

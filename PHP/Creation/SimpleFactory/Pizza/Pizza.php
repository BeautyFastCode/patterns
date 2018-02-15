<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\SimpleFactory\Pizza;

/**
 * Pizza
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
abstract class Pizza
{
    /**
     * The Name of pizza
     *
     * @var string
     */
    private $name;

    /**
     * The Price of pizza
     *
     * @var float
     */
    private  $price;

    /**
     * Pizza constructor
     *
     * @param $name string The Name of pizza
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Returns pizza price
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Sets pizza name
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns pizza name
     *
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }
}

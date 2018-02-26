<?php declare(strict_types=1);

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Creation\StaticFactory\Pizza;

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
     * @param string $name The Name of pizza
     */
    public function __construct(string $name)
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
    public function setPrice(float $price): void
    {
        $this->price = $price;

        return;
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

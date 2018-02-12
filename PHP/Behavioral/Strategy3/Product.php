<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy3;

use DateTime;

/**
 * Product.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Product
{
    /**
     * The product catalog id.
     *
     * @var int
     */
    private $id;

    /**
     * The product name.
     *
     * @var string
     */
    private $name;

    /**
     * The product price.
     *
     * @var float
     */
    private $price;

    /**
     * The product usefulness date.
     *
     * @var DateTime
     */
    private $date;

    /**
     * @param int      $id    The product catalog id
     * @param string   $name  The product name
     * @param float    $price The product price
     * @param DateTime $date  The product usefulness date
     */
    public function __construct($id, $name, $price, $date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->date = $date;
    }

    /**
     * Returns the product catalog id.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Returns the product name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the product price.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Returns the product usefulness date.
     *
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }
}

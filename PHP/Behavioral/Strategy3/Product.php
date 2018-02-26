<?php declare(strict_types=1);

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
     * The product catalog key.
     *
     * @var int
     */
    private $key;

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
     * @param int      $key   The product catalog key
     * @param string   $name  The product name
     * @param float    $price The product price
     * @param DateTime $date  The product usefulness date
     */
    public function __construct(int $key, string $name, float $price, DateTime $date)
    {
        $this->key = $key;
        $this->name = $name;
        $this->price = $price;
        $this->date = $date;
    }

    /**
     * Returns the product catalog key.
     *
     * @return int
     */
    public function getKey(): int
    {
        return $this->key;
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

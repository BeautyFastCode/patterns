<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy3;

use PHP\Behavioral\Strategy3\Sort\SortInterface;

/**
 * Basket.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Basket
{
    /**
     * The products in the basket.
     *
     * @var array
     */
    private $products;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->products = [];
    }

    /**
     * Add a product to the basket.
     *
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    /**
     * Returns the number of products.
     *
     * @return int
     */
    public function numberProducts(): int
    {
        return count($this->products);
    }

    /**
     * Returns the sorted products,
     * according to the property selected by using the interface.
     *
     * @param SortInterface $sort
     * @param string        $criteria
     *
     * @return array
     */
    public function sortProductsBy(SortInterface $sort, $criteria): array
    {
        return $sort->sort($this->products, $criteria);
    }
}

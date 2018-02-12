<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy3\Sort;

use PHP\Behavioral\Strategy3\Product;

/**
 * SortInterface.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface SortInterface
{
    /**
     * Sort the Products by some criteria.
     *
     * @param array  $products
     * @param string $criteria
     *
     * @return array
     */
    public function sort($products, $criteria): array;

    /**
     * Sort ascending the Product property.
     *
     * @param Product $productA
     * @param Product $productB
     *
     * @return int
     */
    public function sortAsc(Product $productA, Product $productB): int;

    /**
     * Sort descending the Product property.
     *
     * @param Product $productA
     * @param Product $productB
     *
     * @return int
     */
    public function sortDesc(Product $productA, Product $productB): int;
}

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
 * IdSort - sorts the Products by id
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class IdSort implements SortInterface
{
    /**
     * {@inheritdoc}
     */
    public function sort($products, $criteria): array
    {
        if ($criteria == Order::ASC) {
            usort($products, [
                IdSort::class,
                "sortAsc",
            ]);
        } elseif ($criteria == Order::DESC) {
            usort($products, [
                IdSort::class,
                "sortDesc",
            ]);
        }

        return $products;
    }

    /**
     * {@inheritdoc}
     */
    public function sortAsc(Product $a, Product $b): int
    {
        /*
         * <=> spaceship operator
         *
         * return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
         */
        return $a->getId() <=> $b->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function sortDesc(Product $a, Product $b): int
    {
        return ($a < $b) ? 1 : (($a > $b) ? -1 : 0);
    }
}

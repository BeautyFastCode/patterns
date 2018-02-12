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
 * KeySort - sorts a Products by key.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class KeySort implements SortInterface
{
    /**
     * {@inheritdoc}
     */
    public function sort($products, $criteria): array
    {
        if (Order::ASC == $criteria) {
            usort($products, [
                self::class,
                'sortAsc',
            ]);
        } elseif (Order::DESC == $criteria) {
            usort($products, [
                self::class,
                'sortDesc',
            ]);
        }

        return $products;
    }

    /**
     * {@inheritdoc}
     */
    public function sortAsc(Product $productA, Product $productB): int
    {
        /*
         * <=> spaceship operator
         *
         * return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
         */
        return $productA->getKey() <=> $productB->getKey();
    }

    /**
     * {@inheritdoc}
     */
    public function sortDesc(Product $productA, Product $productB): int
    {
        return ($productA->getKey() < $productB->getKey()) ? 1 : (($productA->getKey() > $productB->getKey()) ? -1 : 0);
    }
}

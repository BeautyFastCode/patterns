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
 * IdSort - sorts a Products by id.
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
        return ($a->getId() < $b->getId()) ? 1 : (($a->getId() > $b->getId()) ? -1 : 0);
    }
}

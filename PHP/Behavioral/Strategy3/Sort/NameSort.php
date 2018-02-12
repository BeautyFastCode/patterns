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
 * NameSort - sorts a Products by name.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class NameSort implements SortInterface
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
        return $a->getName() <=> $b->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function sortDesc(Product $a, Product $b): int
    {
        return ($a->getName() < $b->getName()) ? 1 : (($a->getName() > $b->getName()) ? -1 : 0);
    }
}

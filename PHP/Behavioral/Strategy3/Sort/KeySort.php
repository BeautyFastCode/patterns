<?php

declare(strict_types=1);

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
    public function sort(array $products, string $criteria): array
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
         * Ternary Operators (?:) - shorthand for if else
         */
        return ($productA->getKey() < $productB->getKey()) ? -1 : (($productA->getKey() > $productB->getKey()) ? 1 : 0);
    }

    /**
     * {@inheritdoc}
     */
    public function sortDesc(Product $productA, Product $productB): int
    {
        return ($productA->getKey() < $productB->getKey()) ? 1 : (($productA->getKey() > $productB->getKey()) ? -1 : 0);
    }
}

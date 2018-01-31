<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy3\Sort;

/**
 * IdSort
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class IdSort implements SortInterface
{
    /**
     * {@inheritdoc}
     */
    public function sort($ids, $criteria): array
    {
        if (SortInterface::ASC) {
            return $ids;
        } else {
            return $ids;
        }
    }
}

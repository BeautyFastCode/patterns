<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy3\Sort;

/**
 * SortInterface
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
interface SortInterface
{
    /**
     * Ascending
     *
     * @var string
     */
    const ASC = 'ASC';

    /**
     * Descending
     *
     * @var string
     */
    const DESC = 'DESC';

    /**
     * Sort the Product property
     *
     * @param $array
     * @param $criteria
     *
     * @return array
     */
    public function sort($array, $criteria): array;
}

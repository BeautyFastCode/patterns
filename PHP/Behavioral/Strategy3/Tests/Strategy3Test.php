<?php

/*
 * (c) BeautyFastCode.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHP\Behavioral\Strategy3\Tests;

use DateTime;
use PHP\Behavioral\Strategy3\Basket;
use PHP\Behavioral\Strategy3\Product;
use PHP\Behavioral\Strategy3\Sort\IdSort;
use PHPUnit\Framework\TestCase;

/**
 * Strategy3Test
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class Strategy3Test extends TestCase
{
    /**
     * Sample products
     *
     * @return array
     */
    public function provideProducts()
    {
        return [
            [
                new Product(32, 'new', 2.99, new DateTime('2018-01-12')),
                new Product(2, 'fresh', 0.99, new DateTime('2017-11-12')),
                new Product(10, 'bestseller', 99.99, new DateTime('2018-03-15')),
            ],
            [
                new Product(32, 'new', 2.99, new DateTime('2018-01-12')),
                new Product(2, 'fresh', 0.99, new DateTime('2017-11-12')),
                new Product(10, 'bestseller', 99.99, new DateTime('2018-03-15')),
            ],
        ];
    }

    /**
     * Test sorting ascending by product id
     *
     * @param array $products
     * @param array $expected
     * @dataProvider provideProducts
     */
    public function testSortIdAscId($products, $expected)
    {
        $basket = new Basket();

        foreach ($products as $product) {
            $basket->addProduct($product);
        }
        $result = $basket->sortProductsBy(new IdSort());

        $this->assertEquals($expected, $result);
    }

//    /**
//     * Test sorting by a name descending
//     *
//     * @param array $names
//     * @param array $expected
//     * @dataProvider provideName
//     */
//    public function testSortDescName($names, $expected)
//    {
//    }
//
//    /**
//     * Test sorting by a price ascending
//     *
//     * @param array $name
//     * @param array $expected
//     * @dataProvider providePrice
//     */
//    public function testSortAscPrice($name, $expected)
//    {
//
//    }
//
//    /**
//     * Test sorting by a date descending
//     *
//     * @param array $name
//     * @param array $expected
//     * @dataProvider provideDate
//     */
//    public function testSortDescDate($name, $expected)
//    {
//
//    }
}

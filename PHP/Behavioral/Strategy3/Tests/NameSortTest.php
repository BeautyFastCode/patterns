<?php

declare(strict_types=1);

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
use PHP\Behavioral\Strategy3\Sort\NameSort;
use PHP\Behavioral\Strategy3\Sort\Order;
use PHPUnit\Framework\TestCase;

/**
 * NameSortTest - test cases for sorting a Products by name.
 *
 * @author    Bogumił Brzeziński <beautyfastcode@gmail.com>
 * @copyright BeautyFastCode.com
 */
class NameSortTest extends TestCase
{
    /**
     * Sample products.
     *
     * @codeCoverageIgnore
     *
     * @return array
     */
    public function provideProductsNameAsc(): array
    {
        return [
            [
                // products
                [
                    new Product(32, 'new', 2.99, new DateTime('2018-01-12')),
                    new Product(2, 'fresh', 0.99, new DateTime('2017-11-12')),
                    new Product(10, 'bestseller', 99.99, new DateTime('2018-03-15')),
                ],

                // expected
                [
                    new Product(10, 'bestseller', 99.99, new DateTime('2018-03-15')),
                    new Product(2, 'fresh', 0.99, new DateTime('2017-11-12')),
                    new Product(32, 'new', 2.99, new DateTime('2018-01-12')),
                ],
            ],
            [
                [
                    new Product(5, 'bread', 2.49, new DateTime('2018-01-01')),
                    new Product(1, 'milky', 4.99, new DateTime('2018-01-09')),
                    new Product(42, 'butter', 6.99, new DateTime('2017-01-22')),
                ],
                [
                    new Product(5, 'bread', 2.49, new DateTime('2018-01-01')),
                    new Product(42, 'butter', 6.99, new DateTime('2017-01-22')),
                    new Product(1, 'milky', 4.99, new DateTime('2018-01-09')),
                ],
            ],
        ];
    }

    /**
     * Test sorting by a name ascending.
     *
     * @param array $products
     * @param array $expected
     *
     * @dataProvider provideProductsNameAsc
     */
    public function testSortNameAsc(array $products, array $expected): void
    {
        $basket = new Basket();

        foreach ($products as $product) {
            $basket->addProduct($product);
        }

        $this->assertEquals(3, $basket->numberProducts());

        $result = $basket->sortProductsBy(new NameSort(), Order::ASC);
        $this->assertEquals($expected, $result);

        return;
    }

    /**
     * Sample products.
     *
     * @codeCoverageIgnore
     *
     * @return array
     */
    public function provideProductsNameDesc(): array
    {
        return [
            [
                // products
                [
                    new Product(32, 'new', 2.99, new DateTime('2018-01-12')),
                    new Product(2, 'fresh', 0.99, new DateTime('2017-11-12')),
                    new Product(10, 'bestseller', 99.99, new DateTime('2018-03-15')),
                ],

                // expected
                [
                    new Product(32, 'new', 2.99, new DateTime('2018-01-12')),
                    new Product(2, 'fresh', 0.99, new DateTime('2017-11-12')),
                    new Product(10, 'bestseller', 99.99, new DateTime('2018-03-15')),
                ],
            ],
            [
                [
                    new Product(5, 'bread', 2.49, new DateTime('2018-01-01')),
                    new Product(1, 'milky', 4.99, new DateTime('2018-01-09')),
                    new Product(42, 'butter', 6.99, new DateTime('2017-01-22')),
                ],
                [
                    new Product(1, 'milky', 4.99, new DateTime('2018-01-09')),
                    new Product(42, 'butter', 6.99, new DateTime('2017-01-22')),
                    new Product(5, 'bread', 2.49, new DateTime('2018-01-01')),
                ],
            ],
        ];
    }

    /**
     * Test sorting by a name descending.
     *
     * @param array $products
     * @param array $expected
     *
     * @dataProvider provideProductsNameDesc
     */
    public function testSortNameDesc(array $products, array $expected): void
    {
        $basket = new Basket();

        foreach ($products as $product) {
            $basket->addProduct($product);
        }

        $this->assertEquals(3, $basket->numberProducts());

        $result = $basket->sortProductsBy(new NameSort(), Order::DESC);
        $this->assertEquals($expected, $result);

        return;
    }
}
